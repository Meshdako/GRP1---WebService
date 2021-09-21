<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   </style>
    <title>API Rest</title>
</head>
<body >

<header>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-info">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="..\index.php">inicio</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Devs.php">desarrolladores</a>
      </li>      
    </ul>
  </div>
</nav>


<div class="container">
<h1 class="text-center mt-5 mb-5">Calculo del Digito Verificador (RUT Chileno)</h1>
<h5 class="mb-4">Instructivo de Uso</h5>
<p>- Al ingresar un numero recuerde <strong>confirmar</strong> los datos primero, para luego desplegarlos con el boton <strong>Mostrar Datos</strong>.</p>
<p>- Recuerde que al ingresar un rut es en <strong>formato chileno</strong>, sin guion ni puntos.</p> 
<p>- No se aceptan numeros negativos ni letras, ya que si lo hace le aparecera <strong>Parametro Invalido</strong>.</p>
<h5 class="text-center mt-5">Ingrese a continuacion su rut sin digito verficador:</h5>

<form method="POST" action="rut.php">
<div class="form-group">
    <input type="text" class="form-control" name="rutD" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ejemplo: 19717521">
    <input type="text" class="form-control" name="div" id="exampleInputEmail2" aria-describedby="emailHelp1" placeholder="Ejemplo: 1971752">
    <button class="button float-right btn btn-info mt-1"> Confirmar</button>    
</div>

</form>
</div>


<div class="container d-flex justify-content-center my-5">
<button type="button" class="button btn btn-info mt-4" data-toggle="modal" data-target="#modal1">Mostrar Resultados</button>

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Calculo del digito verificador</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body text-center">
          <p>Su RUT con Digito Verficador es el siguiente:</p>

          <?php 
          
          $rutdiv= $_POST['rutD'];
          $div= $_POST['div'];
           if ($rutdiv > 0){
            $url="http://localhost:3000/rut?rut=" . $xd;
            $data = json_decode(file_get_contents($url), true);
            print_r($data['rut']);

          } else {
            echo 'Parametro invalido';
          }

          ?>
          
          </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar </button>
              </div>
          </div>
        </div>
      </div>




</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>