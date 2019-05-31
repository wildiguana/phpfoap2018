<?php
$ip = 'localhost';
$usuario = 'root'; 
$password = '';
$db_name = 'test45';
?>

<?php
$con = mysql_connect($ip,$usuario,$password,$db_test45);
 if (!$con)  {
        echo "Ha fallat la connexió a MySQL: " . mysql_connect_error()
	echo "Ha fallat la connexió a MySQL: " . mysql_connect_error();
 }
?>

<?php
session_start();
$error="";
if(isset($_SESSION["login"])){
    header('Location:ejemplo_privado.php');           
}
if(isset($_COOKIE["password"])){
    if($_COOKIE["password"]==1234){
        $_SESSION["login"]=true;
        $_SESSION["nom"]=$_COOKIE["nomusuari"];
        header('Location:ejemplo_privado.php');  
    }else{
        $error="credenciales incorrectas";
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
            header('Location:ejemplo_privado.php');           
        }else{
            $error="Usuario o contraseña incorrecta.";
        }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Usuarios</h2>
                        <a href="create.php" class="btn btn-success pull-right">Añadir nuevo usuario</a>
                    </div>


    <?=$error?>


    <form  method="post">
    Usuario:<input type="text" name="username" id=""><br>
    Contraseña:<input type="password" name="password" id=""><br>
    Recordar: <input type="checkbox" name="recordar" value="1"><br>
    <input type="submit" name="submit" value="Enviar">


    
    
    </form>
</body>
</html>