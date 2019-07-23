<?php

//aquí se crea la "U" del crud: Update

// Include config file
require_once "configdb.php";
 
// Define variables and initialize with empty values
$nombre = $autor = $editorial = "";
$nombre_err = $autor_err = $editorial_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_nombre = trim($_POST["nombre"]);
    if(empty($input_nombre)){
        $nombre_err = "Introduzca un nombre válido.";
    } elseif(!filter_var($input_nombre, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nombre_err = "Introduzca un nombre válido.";
    } else{
        $nombre = $input_nombre;
    }

    // Validate autor
    $input_autor = trim($_POST["autor"]);
    if(empty($input_autor)){
        $autor_err = "Por favor ingrese autor.";     
    } elseif(!ctype_digit($input_autor)){
        $autor_err = "Texto inválido.";
    } else{
        $autor = $input_autor;
    }
    

    //check email and password definition

    // Validate editorial
    $input_editorial = trim($_POST["editorial"]);
    if(empty($input_editorial)){
        $editorial_err = "Introduzca editorial.";     
    } else{
        $editorial = $input_editorial;
    }

     // Validate password
     //$input_contrasena = trim($_POST["contrasena"]);
     //if(empty($input_contrasena)){
     //    $contrasena_err = "Introduzca una contraseña válida.";     
     //} else{
     //    $contrasena = $input_contrasena;
     //}
     echo "holllll";
     //have been checked email and password?

       
    // Check input errors before inserting in database
    if(empty($nombre_err) && empty($autor_err) && empty($editorial_err)){
        // Prepare an update statement
        $sql = "UPDATE usuarios SET nombre=?, autor=?, editorial=? WHERE id=?";
        echo "test"; 
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_nombre, $param_autor, $param_editorial, $param_id);
            
            // Set parameters
            $param_nombre = $nombre;
            $param_apellidos = $autor;
            $param_email = $editorial;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: crud_libros.php");
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $nombre = $row["nombre"];
                    $autor = $row["autor"];
                    $editorial = $row["editorial"];
                   } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Algo ha ido mal. Por favor, prueba más tarde.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar un registro</title>
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
                        <h2>Actualizar contenido</h2>
                    </div>
                    <p>Para actualizar el contenido, por favor modifíquelo y presione aceptar.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($nombre_err)) ? 'hay un error' : ''; ?>">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                            <span class="help-block"><?php echo $nombre_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($autor_err)) ? 'hay un error' : ''; ?>">
                            <label>Autor</label>
                            <input type="text" name="autor" class="form-control" value="<?php echo $autor; ?>">
                            <span class="help-block"><?php echo $autor_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($email_err)) ? 'hay un error' : ''; ?>">
                            <label>Editorial</label>
                            <input type="text" name="editorial" class="form-control" value="<?php echo $editorial; ?>">
                            <span class="help-block"><?php echo $editorial_err;?></span>
                        </div>
                        <!--<div class="form-group <?php echo (!empty($codigo_err)) ? 'hay un error' : ''; ?>">
                            <label>Codigo</label>
                            <input type="text" name="codigo" class="form-control" value="<?php echo $codigo; ?>">
                            <span class="help-block"><?php echo $codigo_err;?></span>
                        </div>-->
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Aceptar">
                        <a href="crud_libros.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>