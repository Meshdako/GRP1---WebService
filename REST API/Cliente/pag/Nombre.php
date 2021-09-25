<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style> 
    body {
    background-image: url('../img/nombre/nombreback.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    } 
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
        <a class="nav-link" href="..\index.php">Inicio</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Devs.php">Desarrolladores</a>
        </li>      
    </ul>
  </div>
</nav>

<div class="container">
<h1 class="text-center mt-5 mb-5">“Split” Nombre Propio:</h1>
<h5 class="mb-4">Instrucciones</h5>
<p> - Ingrese un nombre completo, debe tener en cuenta que el o los nombres van primero y que según la ley chilena los apellidos siempre son dos e irán al final del mismo. </p>
<p> - Otro punto a tener en consideración es que si presenta un apellido o nombre que sea compuesto, vale decir <strong>Del Carmen, Plaza de los Reyes, Ladrón de Guevara, Casas-Cordero</strong>, etc. A menos que este ya contenga un guion explicito como es el caso de <strong>Casas-Cordero</strong>, debe de ingresar el nombre completo de la siguiente manera: "María Helena De León Cáceres: <strong>María Helena De-León Cáceres</strong>".</p>
<form method="POST" action="nombre.php">
<div class="form-group">
    <label for="Nombre Completo">Nombre Completo</label>
    <input type="text" class="form-control" name="nombre1" aria-describedby="ejemploNombre" placeholder="Ejemplo: María Helena De-León Caceres ">
    <button class="float-right btn btn-info mt-1">Confirmar</button>
    
  </div>
</form>
</div>

<div class="container d-flex justify-content-center my-5">
<button type="button" class="button btn btn-info mt-4 "data-toggle="modal" data-target="#modal1">Mostrar Resultados</button>
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Nombre Completo</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body text-center">
          <?php 
          
          $nombreCO1= $_POST['nombre1'];
          $aux1 = ' ';
          $aux2 = '+';
          $contador = 0;
          $nombreCO = str_replace ($aux1, $aux2, $nombreCO1, $contador);

          if ($contador > 1){
          $url="http://localhost:3000/nombre?nombre=" . $nombreCO;
          $data = json_decode(file_get_contents($url),true);
          foreach($data as $key => $value){
          echo $key . ":" . $value . "<br>";
         }
         } else{
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