<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 3A tabla de multiplicar con tablas(while)</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

		<h1>tabla de multiplicar</h1>

		<?php
			for($n=0; $n<=10; $n++ ){
				print ("<p>La tabla de multiplicar del $n es:</p>");
				print ("<ul>");
				for ($i=0; $i <=10 ; $i++) { 
					print ("<li>$n x $i =" . $n*$i . "</li>");
				}
				print ("</ul>");
			}
		?>

</body>
</html>