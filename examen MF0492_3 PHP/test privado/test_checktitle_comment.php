<?php
        $titulo = $comentarios = "";
        $tituloErr = $comentariosErr = "";
        if (isset($_REQUEST['submit'])){
            if (empty($_REQUEST["titulo"])) {
                $tituloErr = "Debes introducir un título.";
            }else{
                $titulo = test_input($_REQUEST["titulo"]);
                    $str ='titulo';
                    echo $str = '$str';
                //if (!preg_match ($str = "titulo")=>10)) {
                   // $tituloErr = "mínimo 10 caracteres."; 
                  //}
            }
            if (empty($_REQUEST["comentarios"])) {
                $comentariosErr = "Debes introducir un comentario, recuerda máximo 500 caracteres.";
            }else{
                $comentarios = test_input($_REQUEST["comentarios"]);
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
            <form  method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
                <input type="text" name="titulo" value="<?=$titulo?>">
                    <span class="error">* <?php=$tituloErr?></span>
                    <br><br>
                <textarea name="comentarios" rows="5" cols="40" value="<?=$comentarios?>">
                    </textarea>
                    <span class="error">* <?php=$comentariosErr?></span>
                    <br><br>
                <input type="submit" name="submit" value="aceptar">
            </form>