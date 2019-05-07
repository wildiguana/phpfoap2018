<?php
session_start();
$error="";
if(isset($_SESSION["login"])){
    header('Location:indice.php');           
}
if(isset($_COOKIE["password"])){
    if($_COOKIE["password"]==1234){
        $_SESSION["login"]=true;
        $_SESSION["usu"]=$_COOKIE["datosusuario"];
        header('Location:ejemplo_privado.php');  
    }else{
        $error="credenciales incorrectas";
    }
         
}
if(isset($_REQUEST["submit"])){
        if($_REQUEST["password"]=="1234"){
            $_SESSION["login"]=true;
            $_SESSION["usu"]=$_REQUEST["usuario"];
            if(isset($_REQUEST["recordar"])&&$_REQUEST["recordar"]==1){
                setcookie("password",$_REQUEST["password"],time()+365*24*60*60);
                setcookie("datousuario",$_REQUEST["usuario"],time()+365*24*60*60);
            }
            header('Location:ejemplo_privado.php');           
        }else{
            $error="Usuario o contraseña incorrecta.";
        }
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 12 php: gestor de noticias</title>
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
      <a class="navbar-brand" href="#"><h2><u>Ejercicio 12: Inicio</u></h2></a>
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
      <h1 class="mt-5">Gestión de noticias</h1>
        <h4 class="mt-5"><u>INTRODUZCA SUS DATOS</u></h4>
</div>


        <ul class="list-unstyled">
        
          <form method="post">

          <div class="form-group">
  <label for="usr"><h4>Usuario:</h4></label>
  <input type="text" name="usuario" id="">
</div>
<div class="form-group">
  <label for="pwd"><h4>Contraseña:</h4></label>
  <input type="password" name="password" id="">
  <br>
  Recordar: <input type="checkbox" name="recordar" value="1"><br>
  <br>
  <input type="submit" class="btn btn-outline-success" name="submit" value="Registrar">
</div>
        <li><h4>No está registrado?</h4></li>
        <a class="nav-link" href="registro.php" ><button type="button" 
        class="btn btn-outline-dark">Regístrese aquí</button></a>

        </ul>
      </div>
    
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

       
          
        

</body>
</html>
