 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Examen UF 3 - Jose Dalcolmo - registro</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>

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
            <a class="nav-link" href="#">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=341');">
  <div style="height: 200px;"></div>
</header>
 
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Nuevo registro</h2>
                    </div>
                    <p>Por favor rellene este formulario para agregar un nuevo usuario.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($nombre_err)) ? 'hay un error' : ''; ?>">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                            <span class="help-block"><?php echo $nombre_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($apellidos_err)) ? 'hay un error' : ''; ?>">
                            <label>Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" value="<?php echo $apellidos; ?>">
                            <span class="help-block"><?php echo $apellidos_err;?></span>
                        </div>


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
 
<?php

//aquí se crea la "C" del crud: create
/*
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nombre = $apellidos = $email = $contrasena = "";
$nombre_err = $apellidos_err = $email_err = $contrasena_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_nombre = trim($_POST["nombre"]);
    if(empty($input_nombre)){
        $nombre_err = "Este campo no puede estar vacío.";
    } elseif(!filter_var($input_nombre, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nombre_err = "Introduzca un nombre válido.";
    } else{
        $nombre = $input_nombre;
    }
    

    // Validate surname
    $input_apellidos = trim($_POST["apellidos"]);
    if(empty($input_apellidos)){
        $apellidos_err = "Este campo no puede estar vacío.";
    } elseif(!filter_var($input_apellidos, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $apellidos_err = "Introduzca un apellido válido.";
    } else{
        $apellidos = $input_apellidos;
    }

    // Validate email - right validation is needed
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Este campo no puede estar vacío.";     
    } else{
        $email = $input_email;
    }
    
    // Validate password - right validation is needed
    $input_contrasena = trim($_POST["contrasena"]);
    if(empty($input_contrasena)){
        $contrasena_err = "Este campo no puede estar vacío.";     
    } elseif(!ctype_digit($input_contrasena)){
        $contrasena_err = "La contraseña ha de tener como mínimo 8 dígitos.";
    } else{
        $contrasena = $input_contrasena;
    }
    


    // Check input errors before inserting in database
    if(empty($nombre_err) && empty($apellidos_err) && empty($email_err) && empty($contrasena_err)){
        // Prepare an insert statement
        echo "holllll";
        $sql = "INSERT INTO usuarios (nombre, apellidos, email, contrasena) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($link, $sql);


        if ( false===$stmt ) {
            // and since all the following operations need a valid/ready statement object
            // it doesn't make sense to go on
            // you might want to use a more sophisticated mechanism than die()
            // but's it's only an example
            die('prepare() failed: ' . htmlspecialchars($link->error));
          }


        print_r($stmt);
        if($stmt){
            echo "hola";
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_nombre, $param_apellidos, $param_email, $param_contrasena);
            
            // Set parameters
            $param_nombre = $nombre;
            $param_apellidos = $apellidos;
            $param_email = $email;
            $param_contrasena = $contrasena;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: crud_prueba.php");
                exit();
            } else{
                echo "Algo ha ido mal. Por favor, prueba más tarde.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 */
    
