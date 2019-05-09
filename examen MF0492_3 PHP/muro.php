<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="muro" content="muro">
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

        
      <!--<Entradas publicadas
      <div class="col-md-8">-->

        <h1 class="my-4">OwnNetWorK -
          <small>Conócenos</small>
        </h1>


        <!-- Blog Post
        <div class="card mb-4">
          <img class="card-img-top" src="imgs/hashtag_finder.gif" alt="buscador de hashtags">
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
        </div>-->

         <!-- Page Content -->
  <div class="container">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">Nuestra filosofía</h1>

    <!-- Author -->
    <p class="lead">
      by
      <a href="https://www.aboutespanol.com/orlando-caceres-ramirez-2879402">Orlando Cáceres Ramirez</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Posteado el 27 de Mayo, 2018</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="imgs/own_logo.jpg" alt="logo">

    <hr>

    <!-- Post Content -->
    <p class="lead">El auge del internet y las redes sociales.<br>
Hace veinte años, probablemente nadie se imaginaba que la manera en que hoy dia se conecta el mundo.


Más que nunca, estamos globalizados.

El mundo entero es un país, dividido pero conectado al mismo tiempo. Esta revolución, que puede analizarse desde varios puntos de vista, tiene como principal actorl, como es de esperar, al internet.

Se ha constituido ya una herramienta indispensable para el desarrollo humano. Tenemos conexion o estamos “en linea”, prácticamente en todos los momentos del dia.

Una de las formas en que ha influencia este avance de la tecnología es la forma en que se conocen las personas. Ya no es raro escuchar a varios jóvenes que al preguntarles cómo ha conocido a tal persona, respondan que ha sido gracias al uso de alguna red social.

Es decir, las redes sociales, gracias a internet, ha roto muchas barreras y permitido que personas de distintas partes del planeta pueden interactuar.

Como señala Borja Fernandez Canel en "Las Redes Sociales. Lo que hacen sus hijos en Internet"“La facilidad de estar en contacto con personas de tu barrio, ciudad, o incluso de otros paises ha producido que las redess sociales sean actualmente el boom de Internet. y era de prever que sucederia, porque se palpaba una necesidad de reunir mensajeria, fotos, videos...”

</p>

    <blockquote class="blockquote">
      <p class="mb-0">El siguiente texto es un ensayo personal acerca de las redes sociales. Se habla de cómo fue surgiendo y la manera en que ha cambiado para siempre la forma en que se relacionan las personas en todo el mundo.</p>
      <footer class="blockquote-footer">Orlando Cáceres Ramírez
        <cite title="Source Title">About español</cite>
      </footer>
    </blockquote>

    <p>Uso y abuso de las redes sociales<br>
Utilizar facebook a diario puede ser una arma de doble filo. Dicha red social, al igual que twitter, constituye un herramienta masiva y poderosa de comunicación.

Y obviamente, la calidad de las comunicaciones, es decir, de lo que se transmite, depende enteramente de las personas.


Una red social puede servir, en pocas palabras, para realizar acciones buenas y honrosas, o para realizar acciones malas que terminan causando daño.

En Egipto no hace mucho se desató una revolución que terminó por derrocar al gobierno. Ese fenómeno fue gracias, en parte, a la expansión y publicidad de los ciudadanos de ese país a través de las redes sociales.

Lo que suele ocurrir es que muchos jóvenes, inconscientes en la mayoría de las veces, realizan un uso abusivo o mal uso de estas herramientas digitales.

Un caso sería en lo que respecta a la privacidad. Internet es un mundo abierto, público, y donde nunca se puede saber con certeza que tan seguros se encuentran allí  nuestros datos.

Borja al respecto señala "el principal problema de las redes sociales es la privacidad. Hoy en dia lo que implica este término se está perdiendo con la inclusión de las redes sociales. Cuando subimos fotos o cuando suben fotos en las que salimos, cuando mostramos información sobre donde vivimos...

</p>

    <p>El uso negativo de las redes<br>
Con el paso del tiempo, las redes sociales comenzaron a ser utilizados no solo de una manera correcta, sino que también se ha prestado para causar daños a otras personas. Existen datos que grupos criminales estudian y espían las redes sociales, para por ejemplo, secuestrar a una persona.

En lo que respecta a los jóvenes, se ha vuelto frecuente utilizar estos espacios como herramienta de acoso. Es lo que ahora se denomina como ciberacoso.

En Estados Unidos y otros países, ha habido numerosos casos de victimas que sufrieron un interminable a traves de los medios digitales, causando un terrible daño psicológico a dichas personas, incluso, impulsando al suicidio.</p>

    <hr>

    <a>Te ha gustado el artículo? &rarr;</a>
                    <input type="button" id="boton"class="btn btn-primary" 
                    value="Dale un like!!!" onclick="javascript: contador()" />

    <hr>

    <!-- Comments Form -->
    <div class="card my-4">
      <h5 class="card-header">Deja tu comentario:</h5>
      <div class="card-body">
        <form>
          <div class="form-group">
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>

    <!-- Single Comment -->
    <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">Anónimo</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
    

    <!-- Comment with nested comments -->
    <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">Anónimo</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

        <div class="media mt-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Anónimo</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <div class="media mt-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Anónimo</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

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
                    <a href="https://twitter.es/">twitter</a>
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
                  <li>
                    <a href="https://www.trendinalia.com/twitter-trending-topics/spain/spain-190508.html">trendinalia</a>
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
