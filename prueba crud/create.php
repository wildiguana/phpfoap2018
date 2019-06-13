<?php

//aquí se crea la "C" del crud: create

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
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevo registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
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

<!-- check email and password definition-->

                        <div class="form-group <?php echo (!empty($email_err)) ? 'hay un error' : ''; ?>">
                            <label>Email</label>
                            <textarea name="email" class="form-control"><?php echo $email; ?></textarea>
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($contrasena_err)) ? 'hay un error' : ''; ?>">
                            <label>Contraseña</label>
                            <textarea name="contrasena" class="form-control"><?php echo $contrasena; ?></textarea>
                            <span class="help-block"><?php echo $contrasena_err;?></span>
                        </div>

<!-- have been checked email and password?-->

                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="crud_prueba.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>