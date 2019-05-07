<?php
session_start();
$error="";
if(isset($_SESSION["login"])){
    header('Location:test1>.php');           
}
if(isset($_COOKIE["password"])){
    if($_COOKIE["password"]==1234){
        $_SESSION["login"]=true;
        $_SESSION["nom"]=$_COOKIE["usuario"];
        header('Location:ejemplo_privado.php');  
    }else{
        $error="Datos erróneos";
    }
         
}
if(isset($_REQUEST["submit"])){
        if($_REQUEST["password"]=="1234"){
            $_SESSION["login"]=true;
            $_SESSION["nom"]=$_REQUEST["username"];
            if(isset($_REQUEST["recordar"])&&$_REQUEST["recordar"]==1){
                setcookie("password",$_REQUEST["password"],time()+365*24*60*60);
                setcookie("nomusuari",$_REQUEST["username"],time()+365*24*60*60);
            }
            header('Location: test1.php');           
        }else{
            $error="Usuario o contraseña incorrecta.";
        }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>test1</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

<form  method="post">
    User:<input type="text" name="username" id=""><br>
    Pass:<input type="password" name="password" id=""><br>
   
    <input type="submit" name="submit" value="Enviar">
</form>

</body>
</html>