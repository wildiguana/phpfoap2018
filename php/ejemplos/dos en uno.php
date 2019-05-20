<!DOCTYPE html>
<html>
<head>
	<title>ejemplo 3: 2 partes del formulario en uno</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
<p> <h1>Ejemplo 3:</h1></p>
<p>formulario en una página</p>
<form action="dos.php" method="post">
        edad:<input type="text" name="edad">
            <input type="submit" name="submit" value="aceptar">
    </form>
    <?php
        if (isset($_post ['submit']));

        //}else{      
         $edad=$_POST['edad'];
         print ("La edad es: $edad");
        
    ?>
    </body>
    </html>