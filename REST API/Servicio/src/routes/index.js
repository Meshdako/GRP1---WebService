const { Router, json } = require("express")
const router = Router();

router.get('/', (req, res) => {
    res.json({ "Titulo": "Hola Mundo" });
});

// Consumiendo Nombre


router.get('/nombre', (req, res) => {
    var nombre = req.query.nombre;
    var aux = nombre.split(" ");
    console.log(aux);
    for (let i = 0; i < aux.length; i++) {
        for (let j = 0; j < aux[i].length; j++) {
            if (aux[i][j] === '_') {
                aux[i] = aux[i].replace('_', ' ');
                console.log(aux[i][j]);
            }

        }
    }

    if (aux.length <= 2) {
        console.log("parametro mal ingresado :c");

    } else {
        if (aux.length >= 3) {
            for (let i = 0, j = 1; i < (aux.length) - 2; i++, j++) {
                console.log("Nombre " + j + ": ", aux[i]);
            }
            for (let i = (aux.length) - 2, j = 1; i < aux.length; i++, j++) {
                console.log("Apellido " + j + ": ", aux[i]);
            }
        }
    }

    var json = {};


    if (aux.length <= 2) {
        res.json('Parametro mal ingresado');
    } else {
        if (aux.length >= 3) {
            for (let i = 0, j = 1; i < (aux.length) - 2; i++, j++) {
                json['Nombre ' + j] = aux[i];

            }
            json['Apellido Paterno'] = aux[aux.length - 2];
            json['Apellido Materno'] = aux[aux.length - 1];
        }

        res.json(json);
    }




})

router.get('/rut', (req, res) => {

    var rutdv = req.query.rut;
    console.log(rutdv[0]);
    var div= rutdv%10;
    var numero=rutdv/10;
    numero=Math.trunc(numero);
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

        /*if (verificador == 10) {
            res.json({ "rut": rutdv + "-" + "k" });
        }else{
            if(verificador==11){
                res.json({ "rut": rutdv + "-" + "0" });
            }else{
                res.json({ "rut": rutdv + "-" + verificador });
            }
        }*/
    if(verificador==div){
        res.json({"rut":"true"});
    }else{
        res.json({"rut":"f"+" "+rutdv + "-" + div})
    }

})


module.exports = router;