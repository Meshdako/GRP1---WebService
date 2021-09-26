const { Router, json } = require("express")
const router = Router();

router.get('/', (req, res) => {
    res.json({ "Titulo": "API REST" });
});


router.get('/nombre', (req, res) => {

    //recepción y cambio de caracteres especiales
    var nombre = req.query.nombre;
    nombre=nombre.replace(/Ã±/gi,'ñ');
    nombre=nombre.replace(/Ã¡/gi,'á');
    nombre=nombre.replace(/Ã©/gi,'é');
    nombre=nombre.replace(/Ã³/gi,'ó');
    nombre=nombre.replace(/Ãº/gi,'ú');
    nombre=nombre.replace(/Ã­/gi,'í');
    console.log("nombre ingresado: " +nombre);

    //contador de caracteres y eliminación de guiones
    var aux1 = nombre.split(" ");
    var contador = 0;
    for (let i = 0; i < aux1.length; i++){
        for (let j = 0; j < aux1[i].length; j++){
            if (aux1[i][j] === '-') {
                aux1[i]=aux1[i].replace('-',' ');
            }
            else{
                contador++;
            }
        }
    }
    // separacion de nombres y apellidos , elaboración de respuesta
    var json = {};
    if(contador <=150){
        if(aux1.length < 3){
            res.json('El Estado de Chile exige un Nombre y Dos apellidos Minimo por persona');
        }
        else{
            for(let i = 0, j = 1; i < aux1.length - 2; i++, j++){
                json['Nombre ' + j] = " "+aux1[i];
            }
            json['Apellido Paterno'] = " "+aux1[aux1.length - 2];
            json['Apellido Materno'] = " "+aux1[aux1.length - 1];
            res.json(json);
        }
    }
    else{
        res.json('Nombre no cumple con maximo de 150 caracteres impuesto por el Estado de Chile');
    }
})

router.get('/rut', (req, res) => {
   //recepcion y transformacion de datos
    var rutdv = req.query.rut;
    var numero=Math.trunc(rutdv);
    var div= (rutdv%1).toFixed(3);
    if(div<0.1){ 
        if(div==0.011){
        div=11;
        }
        if(div==0.010){
        div=10;
        }
    }else{
        div=div*10;
        div=Math.trunc(div);
    }
    
    console.log("rut sin puntos o digto vericador= "+numero);
    console.log("digito verificador (numero)= "+div);
    // calculo de dv
    var Multi=2
    var suma=0;
    while(numero>0){
        suma+=(numero%10)*Multi;
        Multi++;
        if(Multi==8){
        Multi=2;
        }
        numero=numero/10;
        numero=Math.trunc(numero);
    }
    var verificador = 11 - ((suma % 11)/1);
    
    // respuesta
    if(verificador==div){
        console.log("verificacion = true");
        res.json({"rut":"Correcto: el rut y digito verificador ingresados corresponden"});
    }else{
        console.log("verificacion = false");
        res.json({"rut":"Incorrecto: dado al rut ingresado el digito verificador deberia ser ="+verificador});
    }

})


module.exports = router;