<!DOCTYPE html>
<html>
<head>
	<title>ejercicio  php: 7 cual es mayor fecha</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href=".../estilo.css">
</head>
<body>
<p> <h1>hola</h1></p>
    <?php 
    //función: dado dos fechas, cual es la mayor?
    /*$fecha1 = "2019-04-23";
    $fecha2 = "2019-03-23";
    $info = date_parse($fecha1);
    echo"info fecha:".$info;*/

    /*$fecha1 = date_create('2019-04-23');
    $fecha2 = date_create('2019-12-31');
    $diferencia = date_diff($fecha1, $fecha2);
    echo $diferencia->format('%R%a días');*/

    //print_r(date_parse("2019-04-23 10:00:00.1"));

    /*Toni resolución*/

    function fechaMayor ($fecha1, $fecha2) {
        $fecha1 = strtotime ($fecha1);
        $fecha2 = strtotime ($fecha2);

        if ($fecha1 > $fecha2) {
            $comparacion = "La fecha1/A es mayor a la fecha2/B";
            }
            elseif ($fecha1 < $fecha2) {
            $comparacion = "La fecha1/A es menor a la fecha2/B";
            }
            else{
        $comparacion = "La fecha1/A es igual a la fecha2/B";
        }

    //print ("<p>fecha1: $fecha1</p>\n");
    //print ("<p>fecha2: $fecha2</p>\n");

        return $comparacion;
    }
 $fecha_A = ("2019-04-23");
 $fecha_B = ("2019-04-23");
 $resultado = fechaMayor($fecha_A,$fecha_B);
 echo $resultado;
    
    ?> 
 </body>
</html>