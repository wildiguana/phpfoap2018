<?php
function checklogin($usuario,$password){
    $retorna=false;
    /*
        obrir connexió a la db
        fer consulta amb les credencials
        comprovar que ha tornat UN resultat
    */
    // dades de configuració
    $ip = 'localhost';
    $usuari = 'prova';
    $pass = 'prova';
    $db_name = 'prova';
    // connectem amb la db
    $con = mysqli_connect($ip,$usuari,$pass,$db_name);
    if (!$con)  {
        echo "Fallo en la connexión a MySQL: " . mysqli_connect_errno();
            echo "Fallo en la connexión a MySQL: " . mysqli_connect_error();
    }else{
        echo "Todo ha ido bien.<br>";
    }
    $sql = 'SELECT * FROM usuari where usuario="'.$usuario.'" and password=md5("'.$password.'")     ';
    $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
    mysqli_close($con);
   
    if($resultat->num_rows==1){
        $retorna=true;
    }
    return $retorna;
}
function newuser($nom){
    // dades de configuració
    $ip = 'localhost';
    $usuari = 'prova';
    $pass = 'prova';
    $db_name = 'prova';
    // connectem amb la db
    $con = mysqli_connect($ip,$usuari,$pass,$db_name);
    if (!$con)  {
        echo "Fallo en la connexión a MySQL: " . mysqli_connect_errno();
            echo "Fallo en la connexión a MySQL: " . mysqli_connect_error();
    }
    $sql = "insert into usuari (usuario,password) values ('$nombre',md5('1234') )";
    $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
    mysqli_close($con);
}
?>