<?php
if(isset($_REQUEST["submit"])){ 
    print_r($_FILES);
    echo "<br>^<br>";
    if(!is_uploaded_file($_FILES['fichero']['tmp_name'])){
        echo "otro error";
    }
    $dir_subida = 'imgs/';
    $fichero_subido = $dir_subida . time()."_".basename($_FILES['fichero']['name']);
    if (move_uploaded_file($_FILES['fichero']['tmp_name'], $fichero_subido)) {
        echo "El fichero es válido y se subió con éxito.\n";
        echo "<a href=\"$fichero_subido\">imagen</a>";
        echo "<img src=\"$fichero_subido\">";
    } else {
        echo "¡error!\n";
    }
}else{
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="examen mf0492_3">
  <meta name="author" content="jose o.">

  <title>Examen MF0492_3 - PHP - agregador de publicación</title>

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
          </li>
          <li class="nav-item">
            <a class="nav-link">Hola <?=$_SESSION["nom"]?></a>
          </li>
          <input type="submit" name="submit" value="Envía tus comentarios"
          class="btn btn-outline-success">
        </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   <!-- Cuerpo de la página pública -->
   <div class="col-md-8">
    <div class="row">

     
      
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
                <label for="archivos"><h4>Busca el contenido que quieres subir</h4></label>
                <input type="file" name="fichero"><br>
                </div>
    
    <!--<input type="submit" name="submit" value="Enviar">-->
    
    </form>

</div>
</div>

     <!-- Archivos principales Javascript y Bootstrap -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
}
?>
