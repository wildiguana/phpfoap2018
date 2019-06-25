
<?php session_start();

//if(isset($_REQUEST["submit"])){ 
//    print_r($_FILES);
//    echo "<br>^<br>";
//    if(!is_uploaded_file($_FILES['fichero']['tmp_name'])){
//        echo "Falta contenido";
//    }
//    $dir_subida = 'imgs/';
//    $fichero_subido = $dir_subida . time()."_".basename($_FILES['fichero']['name']);
//    if (move_uploaded_file($_FILES['fichero']['tmp_name'], $fichero_subido)) {
//        echo "La imágen se ha subido correctamente.\n";
//        echo "<a href=\"$fichero_subido\">imagen</a>";
//        echo "<img src=\"$fichero_subido\">";
//    } else {
//        echo "Fallo\n";
//    }
//    }else{
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
              <a class="nav-link" href="agregar.php"><button type="button" class="btn btn-default btn-success" target="_blank">Agregar noticia</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn btn-default btn-info" target="_blank">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://cnnespanol.cnn.com/?hpt=header_edition-picker"><button type="button" class="btn btn-default btn-danger" target="_blank">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Cuerpo de la página privada/noticies -->
    <div class="container">
       <div class="row">
          <h1 class="my-4">Coffee News -
            <small>las útimas noticias sobre su bebida favorita </small></h1>
                  
<!-- Contenido -->
    <div class="container">
       <div class="row">
<!-- Post -->
    <div class="col-lg-8">
<!-- Comentarios -->
    <div class="card my-4">
      <h5 class="card-header">Aqui verá las últimas publicaciones</h5>
        <div class="card-body">
              
        </div>
    </div>

  <blockquote class="blockquote">
    <p class="mb-0">Una leyenda muy comentada y difundida sobre el origen del café es la de un pastor 
      de Abisinia (actual Etiopía), llamado Kaldi, observó el efecto tonificante de unos pequeños frutos 
      rojos de arbusto en las cabras que lo habían consumido en los montes, efecto comprobado por él 
      mismo al renovarse sus energías.
    </p>

    <footer class="blockquote-footer"> Kaldi, criador de cabras etíope del siglo IX habría descubierto 
      el café en 1671.<cite title="Extraído de">Wikipedia</cite>
    </footer>
  </blockquote>

              <div class="media mt-4">
                <div class="media-body">
                  <h5 class="mt-0">Origen en Etiopía y Arabia.</h5>
                    <p>El árbol de café tiene su centro de origen en Abisinia (en la actual Etiopía), 
                      en el oriente de África. En el mundo sobresalen por su importancia comercial, 
                      la especie de los cafés arábigos y los de los cafés robustos. <br>
                      La primera especie abarca casi las tres cuartas partes de la producción mundial 
                      y se cultiva principalmente en Centro y Sur de América. El cafeto es probablemente 
                      originario de la provincia de Kafa, en Etiopía, pero la cuestión no está resuelta 
                      completamente.<br>
                      Kaldi llevó unas muestras de hojas y de frutos a un monasterio, donde los monjes 
                      por curiosidad las pusieron a cocinar. Al probar la bebida la encontraron de tan mal 
                      sabor, que arrojaron a la hoguera lo que quedaba en el recipiente. Los granos a medida 
                      que se quemaban, despedían un agradable aroma. <br>
                      Fue así como a uno de los monjes se le ocurrió la idea de preparar la bebida a base de 
                      granos tostados.<br>
                      Parece que las tribus africanas, que sabían del café desde la antigüedad, molían sus 
                      granos y elaboraban una pasta utilizada para alimentar a los animales y aumentar las 
                      fuerzas de los guerreros. Su cultivo se extendió en primer lugar en la vecina Arabia, 
                      llevado probablemente por prisioneros de guerra, donde se popularizó aprovechando la 
                      prohibición del alcohol por el islam. <br>
                      Yemen fue un centro de cultivo importante, desde donde se propagó al resto del mundo árabe.
                      Se le llamó entonces qahwa (قهوة), que significa café. Los datos arqueológicos disponibles 
                      hoy en día sugieren que el café no fue «domesticado» antes del siglo XV:<br>
                      el proceso de elaboración de la bebida, largo y complejo, explica quizás el descubrimiento 
                      tardío de las virtudes de las semillas del cafeto, poco atractivas inicialmente.<br> 
                      Los recientes descubrimientos (1996) de un equipo arqueológico británico, aún por confirmar, 
                      dejan entrever la posibilidad de que el consumo comenzara a partir del siglo XII, en Arabia.
                    </p>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
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


