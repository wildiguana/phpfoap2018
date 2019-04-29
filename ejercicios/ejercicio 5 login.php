<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 5 php: login</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
</head>
    <body>
        <div id=titulo>
            <p><h1>Ejercicio 5:</h1></p>
            <p>Usuario y contraseña correctos: verde<span class=correcto> OK</span> 
            o rojo<span class=error> KO</span></p>
        </div>

<form method="post">
    <fieldset>
        <label>Usuario</label>
            <input type="text" name="usuario" size="20">
            <br>
            <br>
        <label>Contraseña</label>
            <input type="password" name="psw" size="20">
            <br>
            <br>
            <input type="submit"name="registro"value="Registrarse">
    </fieldset>
 
</form>

  <?php 
    $usuario=$_POST['usuario'];
    print($usuario);
    $registro=$_POST['registro'];
    if($registro)
    print("se ha pulsado registrar");
?>
</body>
</html>