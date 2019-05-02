<!DOCTYPE html>
<html>
<head>
	<title>ejercicio  php: 9 devuelve por escrito día y mes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/estilo.css">
</head>
<body>
<p> <h1>Ejercicio 9:</h1></p>
<p>Devuelve por escrito día y mes</p>
<?php

/*setlocale (LC_TIME, "sp_SP");
echo strftime(" en inglés!? %A");

$fecha = "24/04/2019";
print_r(date_parse_from_format("j.n.Y H:iP", $fecha));*/
$fecha_A ="19-03-2014";
if (formatoEuropeo ($fecha_A)){
    setlocale(LC_TIME, "es_ES");
        function formatoEuropeo($fecha_A){
         $resultado=false;
            $valores = explode ('-', $fecha_A);
                if (count ($valores) == 3 && checkdate ($valores[1], $valores[0], 
                    $valores[2])){
                    $resultado=true;
                
                echo ucfirst (strftime("%A, %d, %B, del %Y", strtotime("$fecha_A")));
                    }else{
    print ("<p>La fecha $fecha_A no está en formato europeo</p>\n");
    }
}

?>
</body>
</html>