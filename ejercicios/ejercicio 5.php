<!DOCTYPE html>
<html>
<head>
	<title>ejercicio  php: 5 funciones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<p><h1>hola</h1></p>
<!--function suma ($x, $y)
{
?????
} $
a=1;
$b=2;
$c=suma($a, $b);
print $c;
Lo mismo para restar, multiplicar y dividir.-->

<?php

//defino el array de dónde extrae los datos y lo
//almacena en la variable $numeros.

$numeros=array();

//con la instrucción for le indico los parámetros
//desde dónde comenzar y el rango de números que 
//utilizará; la función "rand" lo hace aleatorio.

for ($i=0; $i<10;$i++){
    $numeros[]=rand(0,5);
}

//aquí inicializo la variable $sum para que almacene
//la suma (que comienza en "0") e incrementa con el
//número escogido del array $numeros al que nombro num.

$sum =0;
    
        foreach ($numeros as $num){
            $sum=$sum+$num;
        }
//lo anterior es la suma en sí; lo siguiente es para 
//visualizar (instr "echo") la suma y a la vez lo compara
//con la instrucción "array_sum" que obtiene la suma de un
//array pero con esa sola instrucción.
echo "<div class=solucion><br>La suma es:".$sum.
"<div class=comp> comparado con ".array_sum($numeros);

//para la resta es el mismo procedimiento

$resta =0;

        foreach ($numeros as$num){
            $resta=$resta-$num;
        }
    echo "<br>La resta es:".$resta."comparado con";

//multiplicar?

$multi =1;

        foreach ($numeros as $num){
            $multi=$num*$multi;
        }
            echo "<br>La multiplicación es:".$multi;

//dividir

$div =1;

 /*       foreach ($numeros as $num){
            $div=$div/$num;
        }
            echo "<br>La división es:".$div;
 */
?> 
</body>
</html>