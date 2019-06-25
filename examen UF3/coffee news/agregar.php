<?php session_start();

/*if(isset($_REQUEST["submit"])){ 
    print_r($_FILES);
    echo "<br>^<br>";
    if(!is_uploaded_file($_FILES['fichero']['tmp_name'])){
        echo "Falta contenido";
    }
    $dir_subida = 'imgs/';
    $fichero_subido = $dir_subida . time()."_".basename($_FILES['fichero']['name']);
    if (move_uploaded_file($_FILES['fichero']['tmp_name'], $fichero_subido)) {
        echo "La imágen se ha subido correctamente.\n";
        echo "<a href=\"$fichero_subido\">imagen</a>";
        echo "<img src=\"$fichero_subido\">";
    } else {
        echo "Fallo\n";
    }
    }else{*/
?>

<!DOCTYPE html>
  <html>
   <head>
     <title>Examen MF3 - Jose Dalcolmo - noticies</title>
      <link rel="icon" href="imgs/favicon.gif" type="image/gif" sizes="16x16">
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="index ex uf3">
              <meta name="author" content="jose o.">
       
  <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <!-- Custom styles for this template 
<link href="css/full-width-pics.css" rel="stylesheet">-->

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
        <li class="nav-item">
          <a class="nav-link" href="#"><button type="button" class="btn btn-default btn-success" target="_blank">Agregar noticia</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><button type="button" class="btn btn-default btn-info" target="_blank">Contacto success</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="https://cnnespanol.cnn.com/?hpt=header_edition-picker"><button type="button" class="btn btn-default btn-danger" target="_blank">Salir</a>
          </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Cuerpo de la página privada/muro -->
    <div class="container">
       <div class="row">
          <h1 class="my-4">Coffee News -
            <small>las útimas noticias sobre tu bebida favorita </small></h1>
                  
<!-- Contenido -->
    <div class="container">
       <div class="row">

<!-- Post -->
    <div class="col-lg-8">

<!-- Vista previa -->
      <div class="card my-4">
        <h5 class="card-header">Añade una nueva publicación a tu muro</h5>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Introduce el título, mínimo 10 caracteres">
              </div>
              <div>
                <textarea class="form-control" rows="4" cols="50" maxlength="500" placeholder="Comentarios, máximo 500 caracteres"></textarea>
              </div>
              <div><label><h4>Busca la imágen que quieres subir</h4></label>
                <input type="file" name="fichero">
              </div>
              <input type="submit" id="boton0"class="btn btn-primary" name="submit" value="Subir"/>
            </form>
           </div>
       </div>
 <div class="col-md-4">

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
              header('Location:agregar.php');           
            }
          ?>
              </div>
            </div>
          </div>
    
<!-- Footer - pie de página con aviso legal -->
     <footer class="py-5 bg-dark">
       <div class="container">
          <?php include 'footer.php';?>
        </div>
      </footer>

<!-- Archivos principales Javascript y Bootstrap -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php

?>
