<!DOCTYPE html>
<html>
<head>
	<title>Examen UF 3 - Jose Dalcolmo - menu</title>
  <link rel="icon" href="imgs/favicon.gif" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="index ex uf3">
    <meta name="author" content="jose o.">

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

<header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=766');">
<div style="height: 20px;"></div>
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
            <a class="nav-link" href="noticies.php"><button type="button" class="btn btn-default btn-primary">Noticias: Consultar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agregar.php"><button type="button" class="btn btn-default btn-success">Insertar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-default btn-danger">Borrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-default btn-warning">Cerrar sesión</a>
        </button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="mt-5">Coffee news</h1>
        <p class="lead">Las útimas noticias sobre su bebida favorita</p>
        <ul class="list-unstyled">
          <li>Inicio</li>
          
       
        <button type="button" class="btn btn-outline-dark">Enviar</button>

        </ul>
      </div>
    </div>
  </div>

  <!-- Ok usuario y logout -->
  <div class="card my-4">
             <?php
              if(isset($_REQUEST["logout"])){
                session_destroy(); 
                  setcookie("password",0,1);
                  setcookie("nombre",0,1);
                header('Location:indice.php');
              } 
                  if(isset($_SESSION["login"]) && $_SESSION["login"]==true){
              ?>
                <h5 class="card-header">Hola, <?=$_SESSION["nom"]?></h5>
                <div class="card-body">
                  <div class="input-group">
                  <button class="btn btn-outline-dark"> <a href="indice.php?logout">desconectar</button></a>
              <?php
                }else{
                  header('Location:noticies.php');           
                }
              ?>
                  </div>
                </div>
              </div>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Footer - pie de página con aviso legal -->
<footer class="py-5 bg-dark">
          <div class="container">
            <?php include 'footer.php';?>
          </div>
        </footer>  
          
        
<?php


?>


</body>
</html>
