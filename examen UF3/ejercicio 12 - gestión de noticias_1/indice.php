<!DOCTYPE html>
<html>
<head>
	<title>Examen UF 3 - Jose Dalcolmo - portada</title>
	<link rel="icon" href="imgs/favicon.gif" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="index ej 12">
    <meta name="author" content="joseO">

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

<header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=766');">
<div style="height: 100px;"></div>
</header>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#"><h2><u>Coffee News</u></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <li class="nav-item">
            <a class="nav-link" href="https://cnnespanol.cnn.com/?hpt=header_edition-picker"
            target="_blank">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content--> 
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
      <h3 class="mt-5">Artículos, noticias, comentarios relacionados con su bebida favorita</h3>
        <h4 class="mt-5"><u>Acceso usuarios registrados</u></h4>
</div>
        <ul class="list-unstyled">
        
          <form method="post">

          <div class="form-group">
  <label for="usr"><h4>Usuario:</h4></label>
  <input type="text" class="form-control" id="">
</div>
<div class="form-group">
  <label for="pwd"><h4>Contraseña:</h4></label>
  <input type="password" class="form-control" id="">
  <br>
  <input type="submit" class="btn btn-outline-success" name="submit" value="Enviar">
</div>
        <li><h4>No está registrado?</h4></li>
        <a class="nav-link" href="registro.php" target="_blank"><button type="button" 
        class="btn btn-outline-dark">Regístrese aquí</button></a>

        </ul>
      </div>
    
  </div>

  <!-- Footer - pie de página con aviso legal -->
  <footer class="py-5 bg-dark">
          <div class="container">
            <?php include 'footer.php';?>
          </div>
        </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

       
          
        
<?php


?>
</body>
</html>
