<!DOCTYPE html>
<html>
<head>
	<title>ejercicio  php: 5 funciones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<h3>Ejercicio 5</h3>
<p><"function suma ($x, $y)<br>
{<br>
?????<br>
} $<br>
a=1;<br>
$b=2;<br>
$c=suma($a, $b);<br>
print $c;<br>
Lo mismo para restar, multiplicar y dividir."</p>
<?php

function suma($x,$y){
    
    $suma=$x+$y;
    return $suma;
} 

$a=1;
$b=2;
$c=suma($a, $b);
//print $c;

echo "la suma es:".$c;

function resta($x,$y){

        $resta=$x-$y;
        return $resta;
}

$c=48;
$d=5;
$e=resta($c,$d);
//print $e;
echo "la resta es:".$e;

function multi($x,$y){

        $multi=$x*$y;
        return $multi;
}

$f=20;
$g=3;
$h=multi($f,$g);
//print $h;

echo "la multiplicación es:".$h;

function dividir ($x,$y);
        $dividir($x,$y){

            $dividir=$x/$y;
            return $dividir;
        }
print $h;
?>
</body>
</html>