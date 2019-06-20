
<?php
session_start();
include("funcion.php");
$error="";
if(isset($_SESSION["login"])){
    header('Location:muro.php');           
}
if(isset($_COOKIE["password"])){
    if($_COOKIE["password"]==1234){
        $_SESSION["login"]=true;
        $_SESSION["nom"]=$_COOKIE["nomusuari"];
        header('Location:muro.php');  
    }else{
        $error="credenciales incorrectas";
    }
         
}
if(isset($_REQUEST["new"])){
    newuser($_REQUEST["newuser"]);
    $error="Nuevo usuario creado, adelante ".$_REQUEST["new"];
}
if(isset($_REQUEST["submit"])){
        if(checklogin($_REQUEST["usuario"],$_REQUEST["password"])){
            $_SESSION["login"]=true;
            $_SESSION["nom"]=$_REQUEST["usuario"];
            if(isset($_REQUEST["recordar"])&&$_REQUEST["recordar"]==1){
                setcookie("password",$_REQUEST["password"],time()+365*24*60*60);
                setcookie("nomusuari",$_REQUEST["usuario"],time()+365*24*60*60);
            }
            header('Location:muro.php');           
        }else{
            $error="Usuario o contraseña incorrecta.";
        }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Examen UF 3 - Jose Dalcolmo - portada</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>

<?=$error?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Coffee News</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=766');">
  <div style="height: 200px;"></div>
</header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Acceso usuarios registrados</h1>
      <form  method="post">
          Usuario:<input type="text" name="usuario" id=""><br>
          Contraseña:<input type="password" name="password" id=""><br>
          Recordar: <input type="checkbox" name="recordar" value="1"><br>
          <input type="submit" name="submit" value="Acceder">
      </form>
    </div>
  </section>

  <h4>¿No estás registrado? <a href="registro.php" class="alert-link"> Regístrate</a> ahora</h4>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=341');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Content section -->






 <!-- Footer - pie de página con aviso legal -->
 <footer class="py-5 bg-dark">
          <div class="container">
            <?php include 'footer.php';?>
          </div>
        </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
