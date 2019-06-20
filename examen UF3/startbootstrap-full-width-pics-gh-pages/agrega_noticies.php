<?php

//aquí se crea la "C" del crud: create

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$titulo = $contenido = "";
$titulo_err = $contenido_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validar título
    $input_titulo = trim($_POST["titulo"]);
    if(empty($input_titulo)){
        $titulo_err = "Este campo no puede estar vacío.";
    } elseif(!filter_var($input_titulo, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $titulo_err = "Introduzca un título válido.";
    } else{
        $titulo = $input_titulo;
    }
    

    // Validar contenido
    $input_contenido = trim($_POST["contenido"]);
    if(empty($input_contenido)){
        $contenido_err = "Este campo no puede estar vacío.";
    } elseif(!filter_var($input_apellidos, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $contenido_err = "Contenido inválido.";
    } else{
        $contenido = $input_contenido;
    }

    // Validar imágen
    /*$input_imagen = trim($_POST["ema"]);
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
    }*/
    


    // Check input errors before inserting in database
    if(empty($titulo_err) && empty($contenido_err)){
        // Prepare an insert statement
        echo "error";
        $sql = "INSERT INTO noticies (titulo, contenido,) VALUES (?, ?,)";
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
            mysqli_stmt_bind_param($stmt, "sss", $param_titulo, $param_contenido, $param_imagen);
            
            // Set parameters
            $param_titulo = $titulo;
            $param_contenido = $contenido;
            $param_imagen = $imagen;
                        
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: visualiza.php");
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
                        <h2>Nueva noticia</h2>
                    </div>
                    <p>Agregar contenido.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($titulo_err)) ? 'hay un error' : ''; ?>">
                            <label>Título</label>
                            <input type="text" name="titulo" class="form-control" value="<?php echo $titulo; ?>">
                            <span class="help-block"><?php echo $titulo_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($contenido_err)) ? 'hay un error' : ''; ?>">
                            <label>Contenido</label>
                            <input type="text" name="contenido" class="form-control" value="<?php echo $contenido; ?>">
                            <span class="help-block"><?php echo $contenido_err;?></span>
                        </div>


                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="visualiza.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>