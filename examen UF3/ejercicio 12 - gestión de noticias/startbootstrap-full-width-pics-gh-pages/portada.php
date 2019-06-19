<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Full Width Pics - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
    <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Section Heading</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
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


      <h1>Section Heading</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
