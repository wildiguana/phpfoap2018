
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
          <a class="nav-link" href="https://cnnespanol.cnn.com/?hpt=header_edition-picker"><button type="button" class="btn btn-default btn-danger" target="_blank">Salir</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Registro</a>
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
            por
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
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                  Título: <input type="text" class="form-control">
                </div>
                <div>
                  Comentarios: <textarea class="form-control" rows="3"></textarea>
                </div>
                <input type="button" id="boton1"class="btn btn-primary" value="Enviar" onclick="contador1()"/>
              </form>
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
              <!-- Búsqueda antiguos/nuevos posts -no activo- -->
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

             <!-- Ok usuario y logout -->
             <div class="card my-4">
             <?php
              if(isset($_REQUEST["logout"])){
                session_destroy(); 
                  setcookie("password",0,1);
                  setcookie("nombre",0,1);
                header('Location:portada.php');
              } 
                  if(isset($_SESSION["login"]) && $_SESSION["login"]==true){
              ?>
                <h5 class="card-header">Hola, <?=$_SESSION["nom"]?></h5>
                <div class="card-body">
                  <div class="input-group">
                  <button class="btn btn-outline-dark"> <a href="indice.php?logout">desconectar</button></a>
              <?php
                }else{
                  header('Location:portada.php');           
                }
              ?>
                  </div>
                </div>
              </div>

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

?>


