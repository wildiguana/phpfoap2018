<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?PHP
$mensaje_es="Hola";
$mensaje_en="Hello";
$idioma= "es"; //variable que decide el idioma de la pagina
$mensaje= "mensaje_" . $idioma;
print $$mensaje; //lo equivalente a print $mensaje_es
?>
• El resultado del código anterior será “Hola  a”


</body>
</html>