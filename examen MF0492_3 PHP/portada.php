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
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="examen mf0492_3">
  <meta name="author" content="jose o.">

  <title>Examen MF0492_3 - PHP - portada</title>

  <!-- Archivo principal CSS para Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Hoja de estilo para personalizar la plantilla -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">OwnNetWorK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link">Tu propia red
              <span class="sr-only">(current)</span>
            </a>
        </div>
    </div>
  </nav>

  <!-- Cuerpo de la página pública -->
  <div class="container">
    <div class="row">

      <!-- Formulario de login -->
      <div class="col-md-8">
        <h1 class="my-4">OwnNetWorK -
          <small>Usuario registrado</small>
        </h1>
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
                    Recordar:<input type="checkbox" name="recordar" value="1">
                    <br>
                    <br>
                    <input type="submit" class="btn btn-outline-success" 
                    name="submit" value="Acceso">
              </div>
                <li><h4>No tienes usuario?</h4></li>
                   <a class="nav-link" href="registro.php" >
                       <button type="button" class="btn btn-outline-dark">
                           Crear usuario</button></a>
            </ul>
        </div>

      <!-- Extras -->
      <div class="col-md-4">

        <!-- Buscar usuarios -->
        <div class="card my-4">
          <h5 class="card-header">Ver quien está en la red</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Ir!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Trending topics -->
        <div class="card my-4">
          <h5 class="card-header">Hot topics</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="https://twitter.com/trendinaliaes">twitter</a>
                  </li>
                  <li>
                    <a href="https://www.hashtags.org/">hashtags</a>
                  </li>
                  <li>
                    <a href="http://pure-waterfall-1016.herokuapp.com/">geolocated tweets</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="https://www.trendsmap.com/">trendsmap</a>
                  </li>
                  <li>
                    <a href="https://www.peoplebrowsr.com/">people browser</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
  </div>

  <!-- Footer - pie de página con aviso legal -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">AVISO LEGAL:
        De acuerdo con lo que establece la Ley Orgánica de Protección de Datos 
        (LOPD) 15/1999, le informamos que los datos personales recogidos en este 
        formulario serán incluidos en un fichero bajo la responsabilidad de 
        YOURSELF, S.L.. Puede ejercer sus derechos de acceso, rectificación, 
        cancelación y oposición en: YOURSELF, S.L., Calle NS/NC Nº 007, 08000 – JAEN. 
        Your Website 2019</p>
    </div>
    </footer>

  <!-- Archivos principales Javascript y Bootstrap -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
