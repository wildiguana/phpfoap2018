<?php session_start();?>

<?php
if(isset($_REQUEST["submit"])){ 
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
}else{

?>

  <!DOCTYPE html>

    <head>

      <link rel="icon" href="imgs/favicon.gif" type="image/gif" sizes="16x16">
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="muro" content="muro">
              <meta name="author" content="jose o.">

        <title>Examen MF0492_3 - PHP - muro</title>

        <!-- Archivo principal CSS para Bootstrap -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Hoja de estilo para personalizar la plantilla -->
        <link href="css/blog-home.css" rel="stylesheet" type="text/css">

        <!-- script contadores: likes - comentarios -->
        <script type="text/javascript">
            var i = 0;
              function contador()
              {
                i = i + 1;
                  var btn = document.getElementById("boton");
                    btn.value = "Dale un like!!! (" + i + ")";
                }
              //contador comentarios//
              var i = 0;
              function contador1()
              {
                i = i + 1;
                  var btn = document.getElementById("boton1");
                    btn.value = "Enviar ";
                    document.getElementById("contador").innerHTML = "Hemos recibido " + i + " comentarios.";
                }
          </script>
      </head>

  <body>

                <!-- Aviso javascript -->
                <noscript>Esta página necesita tener activado JavaScript!</noscript>

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
                    <a class="nav-link">Tu propia red
                      <span class="sr-only">(current)</span>
                    </a>
                </ul>
              </div>
            </div>
          </nav>

          <!-- Cuerpo de la página privada/muro -->
          <div class="container">

            <div class="row">

          <h1 class="my-4">OwnNetWorK -
            <small><?php echo "Bienvenido ".$_SESSION["nom"];?></small>
            </h1>
            <a href="indice.php?logout"><button type="button" 
                  class="btn btn-default btn-warning">Cerrar sesión</a>
                </button></a>

          <!-- Contenido -->
          <div class="container">

            <div class="row">

          <!-- Post -->
          <div class="col-lg-8">

          <!-- Comentarios -->
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

          <!-- Titular -->
          <h1 class="mt-4">Internet y redes sociales: uso y abuso</h1>

          <!-- Autor -->
          <p class="lead">
            by
              <a href="https://www.aboutespanol.com/orlando-caceres-ramirez-2879402">Your Self</a>
            </p>

          <hr>

          <!-- Fecha post -->
          <p>Posteado el 2 de Mayo, 2019</p>

          <hr>

          <!-- Imagen -->
          <img class="img-fluid rounded" src="imgs/own_logo.jpg" alt="logo">

          <hr>

          <!-- Contenido post -->
          <p class="lead"><h5>El auge del internet y las redes sociales.</h5> 
            <br>
            Hace veinte años, probablemente nadie se imaginaba que la manera en que hoy dia se conecta el mundo. Más que nunca, 
            estamos globalizados. El mundo entero es un país, dividido pero conectado al mismo tiempo. Esta revolución, que puede 
            analizarse desde varios puntos de vista, tiene como principal actor, como es de esperar, al internet. Se ha constituido 
            ya una herramienta indispensable para el desarrollo humano. Tenemos conexión o estamos “en línea”, prácticamente en todos 
            los momentos del dia. Una de las formas en que ha influencia este avance de la tecnología es la forma en que se conocen 
            las personas. Ya no es raro escuchar a varios jóvenes que al preguntarles cómo ha conocido a tal persona, respondan que 
            ha sido gracias al uso de alguna red social. Es decir, las redes sociales gracias a internet han roto muchas barreras y 
            han permitido que personas de distintas partes del planeta pueden interactuar. Como señala Borja Fernandez Canel en "Las 
            Redes Sociales. Lo que hacen sus hijos en Internet“, la facilidad de estar en contacto con personas de tu barrio, ciudad, 
            o incluso de otros paises ha producido que las redess sociales sean actualmente el boom de Internet. y era de prever que 
            sucederia, porque se palpaba una necesidad de reunir mensajeria, fotos, videos....
            </p>

              <blockquote class="blockquote">
                <p class="mb-0">El texto de toda esta página es un ensayo personal acerca de las redes sociales. Se habla de cómo fue 
                  surgiendo y la manera en que ha cambiado para siempre la forma en que se relacionan las personas en todo el mundo.
                </p>

              <footer class="blockquote-footer">Your Self
                <cite title="Extraído de">About Español</cite>
                </footer>
              </blockquote>

          <p>El uso negativo de las redes.<br>
            Con el paso del tiempo, las redes sociales comenzaron a ser utilizados no solo de una manera correcta, sino que también se ha 
            prestado para causar daños a otras personas. Existen datos que grupos criminales estudian y espían las redes sociales, para 
            por ejemplo, secuestrar a una persona.
            </p>
              <hr>
            <a>Te ha gustado el artículo? &rarr;</a>
              <input type="button" id="boton"class="btn btn-primary" value="Dale un like!!!" onclick="javascript: contador()" />
              <hr>

          <!-- Comentarios -->
          <div class="card my-4">
            <h5 class="card-header">Deja tu comentario:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Introduce el título" value="<?php echo $titulo;?>">
                </div>
                <div>
                  <textarea class="form-control" rows="3" placeholder="Introduce tus comentarios" value="<?php echo $comentario;?>"></textarea>
                </div>
                <input type="button" id="boton1"class="btn btn-primary" value="Enviar" onclick="contador1()"/>
              </form>
              <?php
                echo "<h2>Has titulado tu comentario:</h2>";
                echo $titulo;
                echo "<br>";
                echo "<h2>Este es tu comentario:</h2>";
                echo "<br>";
                echo $comentario;
                echo "<br>";
                ?>
            </div>
          </div>

          <!-- Commentarios simulados -->
          <div class="media mb-4">
          <p><u><i>Mario___</i></u></p>
            <div class="media-body">
              <h5 class="mt-0">Uso y abuso de las redes sociales.</h5>
                <p>
                <br>
                  Utilizar facebook a diario puede ser una arma de doble filo. Dicha red social, al igual que twitter, constituye una 
                  herramienta masiva y poderosa de comunicación. Y obviamente, la calidad de las comunicaciones es decir, de lo que 
                  se transmite, depende enteramente de las personas. Una red social puede servir en pocas palabras, para realizar 
                  acciones buenas y honrosas, o para realizar acciones malas que terminan causando daño. 
                </p>
                  <img src="http://placehold.it/600x250" alt=""> 
                  <br>
            </div>
          </div>
          

          <!-- Comentarios con hilo -->
          <div class="media mb-4">
            <p><u><i>Marta___</i></u></p>
            <div class="media-body">
              <h5 class="mt-0">Revolución en Egipto.</h5>
                <p>
                  <br>
                  En Egipto no hace mucho se desató una revolución que terminó por derrocar al gobierno. Ese fenómeno fue gracias 
                  en parte a la expansión y publicidad de los ciudadanos de ese país a través de las redes sociales. Lo que suele 
                  ocurrir es que muchos jóvenes, inconscientes en la mayoría de las veces, realizan un uso abusivo o mal uso de 
                  estas herramientas digitales.
                </p>
                  <img src="http://placehold.it/600x250" alt=""> 
                  <br>
              
              <div class="media mt-4">
              <p><u><i>Lucas___</i></u></p>
                <div class="media-body">
                  <h5 class="mt-0">La privacidad.</h5>
                    <p>
                      <br>
                      Un caso sería en lo que respecta a la privacidad. Internet es un mundo abierto, público, y donde nunca se 
                      puede saber con certeza que tan seguros se encuentran allí  nuestros datos. Borja al respecto señala "el 
                      principal problema de las redes sociales es la privacidad. Hoy en dia lo que implica este término se está 
                      perdiendo con la inclusión de las redes sociales. Cuando subimos fotos o cuando suben fotos en las que 
                      salimos, cuando mostramos información sobre donde vivimos..."
                    </p>
                    <br>
                    <br>
                </div>
              </div>

              <div class="media mt-4">
              <p><u><i>Silvia___</i></u></p>
                <div class="media-body">
                  <h5 class="mt-0">Ciberacoso.</h5>
                    <p>
                      <br>
                      En lo que respecta a los jóvenes, se ha vuelto frecuente utilizar estos espacios como herramienta de acoso. 
                      Es lo que ahora se denomina como ciberacoso. En Estados Unidos y otros países, ha habido numerosos casos de 
                      victimas que sufrieron un interminable acoso a traves de los medios digitales, causádoles un terrible daño 
                      psicológico a dichas personas incluso, impulsando al suicidio.
                      </p>
                        <br>
                        <br>
                </div>
              </div>
            </div>
          </div>

            <!-- Extras -->
              <!-- Búsqueda antiguos/nuevos -no activo- -->
              <ul class="pagination justify-content-center mb-4">
                <li class="page-item disabled">
                  <a class="page-link" href="#">&larr; Post anteriores</a>
                </li>
                <li class="page-item disabled">
                  <a class="page-link" href="#">Post más recientes &rarr;</a>
                </li>
              </ul>

            </div>

            <div class="col-md-4">

              <!-- Buscar contactos agendados -no activo- -->
              <div class="card my-4">
                <h5 class="card-header">Buscar contactos</h5>
                <div class="card-body">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar... deshabilitado" disabled/>
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

              <!-- Contador comentarios -->
              <div class="card my-4">
                <h5 class="card-header">Opiniones</h5>
                <div class="card-body">
                  <div class="row">
                      <div id="contador"></div>
                        <p>Estamos opinando sobre estos temas:</p>
                          <img src="imgs/cloud.png" alt="nube de palabras">
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
}
?>