<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 2: calculadora 1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
<p> <h1>Ejercicio 2</h1></p>
<p>calculadora 1</p>

<form method="post">
        numero 1:<input type="number" name="num1">
        numero 2:<input type="number" name="num2">

            <input type="submit" name="submit" value="sumar">
    </form>

<?php

function suma ($x, $y){
   $x=num1;
    $y=num2;
    $z=suma($x, $y);
    print $z;

    if (isset ($_REQUEST["submit"]))

      echo suma ($_REQUEST [""])

  ?>
  </body>
  </html>