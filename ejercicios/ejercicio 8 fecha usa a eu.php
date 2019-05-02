<!DOCTYPE html>
<html>
<head>
	<title>ejercicio  php: 8 pasar fecha en formato EEUU a EU y viceversa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href=".../estilo.css">
</head>
<body>
<p> <h1>Ejercicio 8:</h1></p>
<p> pasar fecha en formato EEUU a EU y viceversa</p>
    <?php 
    function conversorFecha($datos, $region){
        if ($region=="EU"){
            $datos = explode ("-", $datos);
            if (count ($valores))
        }
        
        
            && $region =="EU"); {

            }
        }
        
            $newDate = $valores[1].'/'.$valores[0].'/'.$valores [2];

        }elseif (count ($valores) == 3
                && checkdate ($valores[0], $valores[1], $valores[2])
                && $region == "EEUU"){
                    $newDate = $valores[1].'/'.$valores[0].'/'.$valores
                }

        
        

        echo $datos[2];
    } 

        $fecha1 = "23/04/2019";
        $zona ="EU";
        $resultado = conversorFecha ($fecha1,$zona);
        print ("<p>Fecha inicial de $zona: $fecha1</p>\n");
        print ("<p>Fecha convertida de $zona: $resultado</p>\n");


    

?>
</body>
</html>