<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 12 php: gestor de noticias - registro</title>
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
      <a class="navbar-brand" href="#"><h2><u>Ejercicio 12: Registro</u><h2></a>
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
      <h1 class="mt-5">Gestión de noticias</h1>
        <h4 class="mt-5"><u>RELLENE EL FORMULARIO</u></h4>
</div>

<form  method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
            
<fieldset> 
                
              <label>Nombre*</label>
                <input type="text" name="nombre" id="nombre">
              <label>Apellidos</label>
                <input type="text" name="apellidos" id="apellidos"> 
            <br>
              <label>Edad</label>
                <input type="number" name="edad"id="edad">   
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
        $nombre = $apellidos = $edad = $email = $comentarios = "";
        $nombreErr = $edadErr = $emailErr="";
        if (isset($_REQUEST['submit'])){
            if (empty($_REQUEST["nombre"])) {
                $nombreErr = "Campo obligatorio.";
            }else{
                $nombre = test_input($_REQUEST["nombre"]);
            }
            if (!empty($_REQUEST["apellidos"])) {
                $apellidos = test_input($_REQUEST["apellidos"]);
            }
            if (!empty($_REQUEST["edad"])){           
              if (is_numeric($_REQUEST["edad"])){
                  $edad = test_input($_REQUEST["edad"]);
                  if ($edad<=18){
                      $edadErr = "Debe ser igual o mayor a 18 años.";
                  }
              }else{
                  $edadErr = "La edad tiene que ser un número.";
              }
          }
            if (empty($_REQUEST["email"])) {
                $emailErr = "Campo obligatorio.";
            }else{
                $email = test_input($_REQUEST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Formato de email inválido.";
                }
            }
                if (!empty($_REQUEST["comentarios"])) {
                $comentarios = test_input($_REQUEST["comentarios"]);
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
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
