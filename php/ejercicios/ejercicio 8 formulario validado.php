<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 8 php: formulario validado</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
</head>
    <body>
        <div id=titulo>
            <p><h1>Ejercicio 8:</h1></p>
            <p>Formulario validado: si está OK lo muestra rellenado y 
            lo envía, sino muestra error en rojo<span class=error> de
            datos incorrectos o incompletos.</span></p>
        </div>
        <form method="post" action="<php echo htmlspecialchars($_SERVER"["PHP_SELF"]);?">
            <fieldset>
                <label>Nombre*</label>
                <input type="text" name="nombre" size="10">
            <br>
            <br>
                <label>Apellidos</label>
                <input type="text" name="apellidos" size="20">
            <br>
            <br>
                <label>Edad</label>
                <input type="number" name="edad" size="2">
            <br>
            <br>
                <label>Email*</label>
                <input type="text" name="email" size="30">
            <br>
            <br>
                <label>Comentarios</label>
                <textarea name="comentarios" maxlength="50"></textarea>

                <input type="submit"name="registro"value="Registrarse">
            </fieldset>
 
</form>



        <?php
        //definir las variables e inicializarlas
        $nombre = $apellidos = $edad = $email = $comentarios = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = test_input($_POST["nombre"]);
            $apellidos = test_input($_POST["apellidos"]);
            $edad = test_input($_POST["edad"]);
            $email = test_input($_POST["email"]);
            $comentarios = test_input($_POST["comentarios"]);
        }


        ?>
    </body>
</html> 