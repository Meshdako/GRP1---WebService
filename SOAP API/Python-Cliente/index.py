from flask import Flask, render_template, send_from_directory # Llamamos flask

app = Flask(__name__)

@app.errorhandler(404)
def page_not_found(e):
    return render_template('home.html')

@app.route("/static/<path:path>")
def static_dir(path):
    return send_from_directory("static", path)

@app.route('/')
def home():
    return render_template('home.html')

@app.route('/devs')
def devs():
    return render_template('devs.html')

@app.route('/rut')
def rut():
    return render_template('rut.html')

@app.route('/nombre')
def nombre():
    return render_template('nombre.html')

if __name__ == '__main__':
    app.run(debug=True)