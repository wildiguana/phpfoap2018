<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="examen mf0492_3">
  <meta name="author" content="jose o.">

  <title>Examen MF0492_3 - PHP - muro</title>

   <!-- Archivo principal CSS para Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Hoja de estilo para personalizar la plantilla -->
  <link href="css/blog-home.css" rel="stylesheet">

  <!--script contador likes-->
  <script type="text/javascript">
var i = 0;
 
function contador()
{
i = i + 1;
var btn = document.getElementById("boton");
btn.value = "Dale un like!!! (" + i + ")";
}
</script>
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
            <a class="nav-link">Bienvenido <?=$_SESSION["nom"]?></a>
          </li>
          <a href="indice.php?logout"><button type="button" 
          class="btn btn-default btn-warning">Cerrar sesión</a>
        </button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Cuerpo de la página privada/muro -->
  <div class="container">

    <div class="row">

        
      <!-- Entradas publicadas -->
      <div class="col-md-8">

        <!--<h1 class="my-4">OwnNetWorK -
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
    Recordar: <input type="checkbox" name="recordar" value="1"><br>
    <br>
    <input type="submit" class="btn btn-outline-success" name="submit" value="Acceso">
  </div>
          <li><h4>No tienes usuario?</h4></li>
          <a class="nav-link" href="registro.php" ><button type="button" 
          class="btn btn-outline-dark">Crear usuario</button></a>
  
          </ul>-->

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="imgs/hashtag-finder.gif" alt="buscador de hashtags">
          <div class="card-body">
            <h2 class="card-title">Postcron: Buscador de hashtags</h2>
            <p class="card-text">#gardening #plants #flower #jardin #mygarden 
                #plant #succulent #succulents #instagarden #garten #gardens 
                #flowerstagram #flowersofinstagram #instaflower #cactus... te suena?
                Postcron el buscador de hashtags que necesitas para tus posts. 
                Encuentra rápidamente #hashtags relacionados a partir de un 
                término o palabra clave para aplicarlos en tus posts de 
                Instagram, Facebook y Twitter!<br>
                Con esta herramienta podrás aplicar #hashtags relacionados de 
                manera simple y lograrás que tus posts ganen alcance e 
                interacción.</p>
                <a>Te ha gustado el artículo? &rarr;</a>
                    <input type="button" id="boton"class="btn btn-primary" 
                    value="Dale un like!!!" onclick="javascript: contador()" />
              </div>
          <div class="card-footer text-muted">
            Comentado el 30 de febrero de 2016 por
            <a href="https://postcron.com/es/blog/landings/buscador-de-hashtags/">
            HashTagsKilah</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

       
       <!-- Extras -->
        <!-- Búsqueda antiguos/nuevos -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Anteriores</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Recientes &rarr;</a>
          </li>
        </ul>

      </div>

       <div class="col-md-4">

        <!-- Buscar contactos agendados -->
        <div class="card my-4">
          <h5 class="card-header">Buscar contactos</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Ir!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Trending topics-->
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

        <!-- Side Widget 
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->
  </div>
  
  <!-- Footer - pie de página con aviso legal -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">AVISO LEGAL:
        De acuerdo con lo que establece la Ley Orgánica de Protección de Datos 
        (LOPD) 15/1999, le informamos que los datos personales recogidos en este 
        formulario serán incluidos en un fichero bajo la responsabilidad de 
        YOURSELF, S.L.. Puede ejercer sus derechos de acceso, rectificación, 
        cancelación y oposición en: YOURSELF, S.L., C/NS/NC Nº 5, 08000 – JAEN. 
        Your Website 2019</p>
    </div>
  </footer>

  <!-- Archivos principales Javascript y Bootstrap -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
