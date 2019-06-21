<!DOCTYPE html>
<html>
<head>
	<title>Examen UF 3 - Jose Dalcolmo - registro</title>
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
      <a class="navbar-brand" href="#"><h2><u>Coffe News</u><h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <li class="nav-item">
              <a class="nav-link" href=""target="_blank"><button type="button" 
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
      <h1 class="mt-5">Coffe News</h1>
        <h4 class="mt-5"><u>RELLENE EL FORMULARIO</u></h4>
</div>

<form method="post" action="<php echo htmlspecialchars($_SERVER"["PHP_SELF"])">
            
<fieldset> 
                
              <label>Nombre*</label>
                <input type="text" name="nombre" id="nombre">
              <label>Apellidos</label>
                <input type="text" name="apellidos" id="apellidos"> 
            <br>
              <label>Fecha de nacimiento</label>
                <input type="number" name="nacimiento"id="nacimiento">   
            <br>
              <label>Email*</label>
                <input type="text" name="email" size="30">
              <label>Contraseña*</label>
                <input type="password" name="password">
              <label>Repita la contraseña</label>
                <input type="password" name="password1">
              <br>
              <label>Comentarios</label>
                <textarea name="comentarios" maxlength="50"></textarea>
              <br>
                <input type="submit"name="registro"value="Registrarse" 
                class="btn btn-outline-dark" onclick="this.disabled=true;
                this.value=’En proceso...’; this.form.submit()" >
            </fieldset>
 
</form>
<?php
    $nombre=$apellidos=$email=$password=$password1=$cometarios="";
    $nombreErr=$apellidosErr=$emailErr=$passwordErr=$password1Err=$comentariosErr="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["nombre"])){
      $nombreErr="Campo obligatorio";
    }else{
      $nombre=test_input($_POST["nombre"]);
    }

      $nombre=test_input($_POST["nombre"]);
      $apellido=test_input($_POST["apellido"]);
      $nacimiento=test_input($_POST["nacimento"]);
      $email=test_input($_POST["email"]);
      $password=test_input($_POST["password"]);
      $password1=test_input($_POST["password1"]);
      $comentarios=test_input($_POST["comentarios"]);
    }
    


       

 
  
       
          
        



?>
</body>
</html>
