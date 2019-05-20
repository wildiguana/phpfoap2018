<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 3B - listas-for</title>
	<title>ejercicio 3A tabla de multiplicar con listas(for)</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<table style="width: 100%">

		
	</table>
			<h1>tabla de multiplicar</h1>

		<?php
			for($n=0; $n<=10; $n++ ){
				print ("<p>La tabla de multiplicar del $n es:</p>");
				print ("<table>");
				for ($i=0; $i <=10 ; $i++) { 
					$resultado=$n*$i;
					print ("<tr>"); 
					print ("<td> $n x $i => </td>" );
					print("<td> $resultado </td>");
					print ("<tr>"); 

				}
				print ("</table>");
			}
		?>

	

</body>
</html>