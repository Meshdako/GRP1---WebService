from flask import Flask, render_template, request, send_from_directory # Llamamos flask
from zeep import Client

app = Flask(__name__)

#Conexión con JAVA-WSDL
cliente = Client('http://localhost:8080/Service/WSop?WSDL')

#Conexiones y renderizados.
@app.errorhandler(404)
def page_not_found(e):
    return render_template('home.html')

@app.route("/static/<path:path>")
def static_dir(path):
    return send_from_directory("static", path)

@app.route('/')
def home():
    return render_template('home.html')

@app.route('/dev')
def dev():
    return render_template('dev.html')

@app.route('/rut')
def rut():
    return render_template('rut.html')

@app.route('/nombre')
def nombre():
    return render_template('nombre.html')

#Se recibe el RUN con su Dígito verificador y si son correctos, se envía a la página correspondiente.
@app.route('/add_rut', methods=['POST'])
def add_rut():
    if request.method == 'POST':
        RUN = request.form['rutD']
        DIGITO = request.form['div']
        
        if DIGITO == '12':
            return render_template('/Respuesta_Run/Vacio.html', DIV = 'No seleccionó una opcion')
        if DIGITO == '10':
            if cliente.service.RUT(RUN, DIGITO) == True:
                return render_template('/Respuesta_Run/Correcto.html', DIV = 'K')
        else:
            if cliente.service.RUT(RUN, DIGITO) == True:
                return render_template('/Respuesta_Run/Correcto.html', DIV = DIGITO)
            else:
                return render_template('/Respuesta_Run/Incorrecto.html', DIV = DIGITO)

#Se recibe el nombre completo para devolverlo a la página correspondiente.
@app.route('/add_nombre', methods=['POST'])
def add_nombre():
    if request.method == 'POST':
        NAME = request.form['fullname']
        RESULT = cliente.service.Nombre(NAME)
        #Se cuentan cuantos
        cont = len(RESULT)
        
        if cont == 1:
            return render_template('/Respuesta_Nombre/Correcto.html', LIST = RESULT, LIST2 = {'NO HAY APELLIDOS'})
        elif cont == 2:
            return render_template('/Respuesta_Nombre/Correcto.html', LIST = {RESULT[0]}, LIST2 = {RESULT[1]})
        else:
            NOMBRES = [RESULT[0]]
            i = 1
            while i < (cont - 2):
                NOMBRES.append(RESULT[i])
                print(i)
                i = i + 1
                

            APELLIDOS = [RESULT[cont - 2], RESULT[cont - 1]]
            return render_template('/Respuesta_Nombre/Correcto.html', LIST = NOMBRES, LIST2 = APELLIDOS)

if __name__ == '__main__':
    app.run(debug=True)