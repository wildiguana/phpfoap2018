<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 1: 2 formulario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
<p> <h1>Ejercicio 1:</h1></p>
<p>formulario</p>
<form method="post">
        Dime algo:<input type="text" name="frase">
            <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    if(isset ($_REQUEST['frase'])){
        echo "La frase es: ".$_REQUEST ['frase'];

    }else{
        
    }
