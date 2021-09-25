<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    .carousel-inner img {
    width: 100%;
    height: 100%;
    }
    body {
    background-image: url('img/indexback.png');
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
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="pag\Devs.php">Desarrolladores</a>
        </li>      
      </ul>
    </div>
  </nav>

  <div>
  <h1 class="text-center mt-5" style="color:WhiteSmoke;">
  Trabajo nº1
  </h1>
  <h3 class="text-center mt-2" style="color:WhiteSmoke;">
  Web Service API Rest
  </h3>
  <h5 class="text-center mt-5" style="color:WhiteSmoke;">Durante el desarrollo de este proyecto se crearon los siguientes métodos en concordancia con lo pedido en el enunciado de la misma,</h5>
  <h5 class="text-center mb-5" style="color:WhiteSmoke;">que serían los métodos de Split de Nombre Propio y Validador de Digito Verificador.</h5> 
  </div>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img\nombre.png" alt="nombre">
      <div class="carousel-caption">
        <div class="row">
          <div class="col">
              <h1>“Split” Nombre Propio:</h1>
              <p>El método recibira un nombre completo; asumiendo que siempre vienen primero los nombres y luego los apellidos, considerando que una persona puede tener uno o más nombres.</p>
          </div> 
          <div class="col">
              <a href="pag\Nombre.php" type="button" class="btn btn-info btn-lg" style="justify-content: center;">Usar Método</a>
          </div>
        </div>
      </div>
        
      
      </div>
      <div class="carousel-item">
        <img src="img\rut.png" alt="rut">
        <div class="carousel-caption">
        <div class="row">
          <div class="col">
              <h1>Validador Dígito Verificador:</h1>
              <p>El método debe recibir la parte entera de un rut y un dígito verificador como campos separados y devolver como respuesta un indicador de si el dígito verificador entregado es o no correcto para el rut en cuestión (se utiliza el sistema Chileno).</p>
          </div> 
          <div class="col">
              <a href="pag\Rut.php" type="button" class="btn btn-info btn-lg" style="justify-content: center;">Usar Método</a>
          </div>
        </div>
      </div>   
    </div>
    
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
</body>
</html>