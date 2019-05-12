<!DOCTYPE html>
<html lang="es">

<head>
<link rel="icon" href="imgs/favicon.gif" type="image/gif" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="registro" content="registro">
  <meta name="author" content="jose o.">

  <title>Examen MF0492_3 - PHP - formulario registro</title>

  <!-- Archivo principal CSS para Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Hoja de estilo para personalizar la plantilla -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">OwnNetWorK</a><img class="img-fluid rounded" src="imgs/own_logo_cabecera.jpg" alt="logo">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link"href="portada.php">Tu propia red
              <span class="sr-only">(current)</span>
            </a>
        </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
      <h2 class="mt-5"><u>RELLENA EL FORMULARIO</u></h2>
        <h4 class="mt-5">Todos los campos son obligatorios</h4>
</div>

<form  method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
            
<fieldset> 
                
              <label>Nombre</label>
              <br>
                <input type="text" name="nombre" id="nombre">
                <br>
              <label>Apellidos</label><br>
                <input type="text" name="apellidos" id="apellidos"> 
            <br>
              <label>Fecha de nacimiento</label>
              <br>
                <input type="date" name="edad"id="edad">   
            <br>
              <label>Email</label>
              <br>
                <input type="text" name="email" size="30">
                <br>
              <label>Contraseña</label>
              <br>
                <input type="password" name="password">
                <br>
              <label>Repita la contraseña</label>
              <br>
                <input type="password" name="password1">
              <br>
              <br>
                <input type="submit"name="registro"value="Registrarse" 
                class="btn btn-outline-dark" onclick="this.disabled=true;
                this.value=’En proceso...’; this.form.submit()" >
            <br>
            <br>
            </fieldset>
 
</form>
<?php
        $nombre = $apellidos = $edad = $email = $password = $password1="";
        $nombreErr = $apellidosErr = $edadErr = $emailErr = $passwordErr =$password1Err="";
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
                if (empty($_REQUEST["password"])) {
                    $passwordErr = "Campo obligatorio.";
                }else{
                    $password = test_input($_REQUEST["password"]);
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
      <<?php include 'footer.php';?>
    </div>
  </footer>

  <!-- Archivos principales Javascript y Bootstrap -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
    </html>
