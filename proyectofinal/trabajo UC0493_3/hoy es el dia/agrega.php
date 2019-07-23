<?php

//aquí se crea la "C" del crud: create

// Include config file
require_once "configdb.php";
 
// Define variables and initialize with empty values
$nombre = $autor = $editorial = $codigo = "";
$nombre_err = $autor_err = $editorial_err = $codigo_err = "";
 
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
    $input_autor = trim($_POST["autor"]);
    if(empty($input_autor)){
        $autor_err = "Este campo no puede estar vacío.";
    } elseif(!filter_var($input_autor, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $autor_err = "Introduzca un autor válido.";
    } else{
        $autor = $input_autor;
    }

    // Validate email - right validation is needed
    $input_editorial = trim($_POST["editorial"]);
    if(empty($input_editorial)){
        $editorial_err = "Este campo no puede estar vacío.";     
    } else{
        $editorial = $input_editorial;
    }
    
    // Validate password - right validation is needed
    $input_codigo = trim($_POST["codigo"]);
    if(empty($input_codigo)){
        $codigo_err = "Este campo no puede estar vacío.";     
    } elseif(!ctype_digit($input_codigo)){
        $codigo_err = "El código ha de tener como mínimo 8 dígitos.";
    } else{
        $codigo = $input_codigo;
    }
    


    // Check input errors before inserting in database
    if(empty($nombre_err) && empty($autor_err) && empty($editorial_err) && empty($codigo_err)){
        // Prepare an insert statement
        echo "holllll";
        $sql = "INSERT INTO usuarios (nombre, autor, editorial, codigo) VALUES (?, ?, ?, ?)";
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
            mysqli_stmt_bind_param($stmt, "ssss", $param_nombre, $param_autor, $param_editorial, $param_codigo);
            
            // Set parameters
            $param_nombre = $nombre;
            $param_autor = $autor;
            $param_editorial = $editorial;
            $param_codigo = $codigo;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
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
}
?>