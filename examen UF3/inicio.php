<?php
session_start();
include("funcion.php");
$error="";
if(isset($_SESSION["login"])){
    header('Location:muro.php');           
}
if(isset($_COOKIE["password"])){
    if($_COOKIE["password"]==1234){
        $_SESSION["login"]=true;
        $_SESSION["nom"]=$_COOKIE["nomusuari"];
        header('Location:muro.php');  
    }else{
        $error="credenciales incorrectas";
    }
         
}
if(isset($_REQUEST["new"])){
    newuser($_REQUEST["newuser"]);
    $error="Nuevo usuario creado, adelante ".$_REQUEST["new"];
}
if(isset($_REQUEST["submit"])){
        if(checklogin($_REQUEST["usuario"],$_REQUEST["password"])){
            $_SESSION["login"]=true;
            $_SESSION["nom"]=$_REQUEST["usuario"];
            if(isset($_REQUEST["recordar"])&&$_REQUEST["recordar"]==1){
                setcookie("password",$_REQUEST["password"],time()+365*24*60*60);
                setcookie("nomusuari",$_REQUEST["usuario"],time()+365*24*60*60);
            }
            header('Location:muro.php');           
        }else{
            $error="Usuario o contraseña incorrecta.";
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?=$error?>


    <form  method="post">
    User:<input type="text" name="usuario" id=""><br>
    Pass:<input type="password" name="password" id=""><br>
    Recordar: <input type="checkbox" name="recordar" value="1"><br>
    <input type="submit" name="submit" value="Enviar">


    
    
    </form>


    <bR>
    <h1>¿no tienes usuario? crea uno rápido con password facilito->1234</h1>
    <form method="post">
        <br>tu nuevo user: <input type="text" name="newuser" id="">
        <br><input type="submit" name="new" value="Enviar">

    
    </form>
</body>
</html>