<!-- Formulario de login -->
<div class="col-md-8">
        <h1 class="my-4">OwnNetWorK -
          <small>Acceso usuarios</small>
        </h1>
         <ul class="list-unstyled">
            <form  method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <div class="form-group">
                <label>Usuario:</label> 
                <input type="text" name="usuario" value="<?=$usuario?>">
                <span class="error">* <?=$errUsu?></span>
                <br><br>
                <div class="form-group">
                <label>Contraseña:</label> 
                <input type="password" name="password" value="<?=$password?>">
                <span class="error">* <?=$errPass?></span>
                    <br><br>
                <label>Repite contraseña:</label> 
                <input type="password" name="password1" value="<?=$password1?>">
                <span class="error">* <?=$errPass1?></span>
                    <br><br>
                    <div class="form-group">
                    <br>
                    Recordar:<input type="checkbox" name="recordar" value="1">
                    <br>
                    <br>
                <input type="submit" name="submit" class="btn btn-outline-success" 
                    name="submit" value="Acceso">
            </form>
            <li><h4>No estás registrado?</h4></li>
                   <a class="nav-link" href="registro.php" >
                       <button type="button" class="btn btn-outline-dark">
                           Únete hoy</button></a>
            </ul>
            <?php
                $usuario = $password = "";
                $errUsu = $errPass = "";
                if (isset($_REQUEST['submit'])){
                    if (empty($_REQUEST["usuario"])) {
                        $errUsu = "Es obligatorio informar el usuario.";
                    }else{
                        if (empty($_REQUEST["password"])) {
                            $password = "Es obligatorio informar la contraseña.";
                        }else{
                             if (empty($errores)){
                                header('Location:muro.php');
                            }

            ?>
            <?php
            if ($errores != ""){
                print ("<p>Error en la contraseña:</p>");
                print ("<ul>");
                print ($errores);
                print ("</ul>");
            }
            ?>