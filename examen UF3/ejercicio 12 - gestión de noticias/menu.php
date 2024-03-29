<?php
session_start();
if(isset($_REQUEST["logout"])){
    session_destroy(); 
    setcookie("password",0,1);
    setcookie("usuario",0,1);
    header('Location:indice.php');           
}
if(isset($_SESSION["login"])&&$_SESSION["login"]==true){
?>

<?php
}else{
    header('Location:indice.php');           
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 12 php: gestor de noticias - menu</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="index ej 12">
    <meta name="author" content="joseO">

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#"><h2><u>Ejercicio 12: Menú</u></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><button type="button" class="btn btn-default btn-primary">Noticias: Consultar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-default btn-success">Insertar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-default btn-danger">Borrar</a>
          </li>
          <li class="nav-item">
          <a href="indice.php?logout"><button type="button" class="btn btn-default btn-warning">Cerrar sesión</a>
        </button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">
       Bienvenido <?=$_SESSION["nom"]?>, a Gestión de Noticias</h1>
        <p class="lead">Tu portal de información</p>
        <ul class="list-unstyled">
          <li>Inicio</li>
          
       
        </ul>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
