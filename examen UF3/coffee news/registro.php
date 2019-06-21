<!DOCTYPE html>
<html>
<head>
	<title>Examen UF 3 - Jose Dalcolmo - registro</title>
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
<div style="height: 20px;"></div>
</header>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#"><h2><u>Coffee News</u><h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <li class="nav-item">
              <a class="nav-link" href="indice.php"target="_blank"><button type="button" 
                class="btn btn-default btn-warning">Volver a inicio</a>
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
      <h1 class="mt-5">Coffee News</h1>
        <h4 class="mt-5"><u>Todos los campos son obligatorios</u></h4>
</div>

<form method="post" action="<php echo htmlspecialchars($_SERVER"["PHP_SELF"])">
            
<fieldset> 
                
              <label><h5>Nombre</h5></label>
                <input type="text" name="nombre" id="nombre">
              <label><h5>Apellidos</h5></label>
                <input type="text" name="apellidos" id="apellidos"> 
            <br>
              <label><h5>Email</h5></label>
                <input type="text" name="email" size="30">
              <label><h5>Contraseña</h5></label>
                <input type="password" name="password">
              <label><h5>Repita la contraseña</h5></label>
                <input type="password" name="password1">
              <br>
            <input type="submit"name="registro"value="Registrarse" 
                class="btn btn-outline-dark" onclick="this.disabled=true;
                this.value=’En proceso...’; this.form.submit()" >
            </fieldset>
 
</form>
<?php
    $nombre=$apellidos=$email=$password=$password1="";
    $nombreErr=$apellidosErr=$emailErr=$passwordErr=$password1Err="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["nombre"])){
      $nombreErr="Campo obligatorio";
    }else{
      $nombre=test_input($_POST["nombre"]);
    }

      $nombre=test_input($_POST["nombre"]);
      $apellido=test_input($_POST["apellido"]);
      $email=test_input($_POST["email"]);
      $password=test_input($_POST["password"]);
      $password1=test_input($_POST["password1"]);
      }


?>
<!-- Footer - pie de página con aviso legal -->
<footer class="py-5 bg-dark">
          <div class="container">
            <?php include 'footer.php';?>
          </div>
        </footer>
</body>
</html>
