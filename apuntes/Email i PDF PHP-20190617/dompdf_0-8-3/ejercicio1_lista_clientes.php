<?php    
    // dades de configuració
    $ip = 'localhost';
    $usuari = 'root';
    $pass = '';
    $db_name = 'empresa';
    
    // connectem amb la db
    $con = mysqli_connect($ip,$usuari,$pass,$db_name);
    if (!$con)  {
            echo "Fallo en conexión a MySQL: " . mysqli_connect_errno();
            echo "Falllo en conexión a MySQL: " . mysqli_connect_error();
    }else{
       // echo "todo ha ido bien<br>";
    }
    $select = 'SELECT * FROM clients';
    $resultat = mysqli_query($con,$select) or die('Consulta fallida: ' . mysqli_error($con));
  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Archivo principal CSS para Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Hoja de estilo para personalizar la plantilla -->
<link href="css/blog-home.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
</head>
 
<body>
<div id="wrapper">
        <header>
            <div class='define'>
            <div style= "width:600px"> <h4> Listado de clientes de empresa </h4></div> 
            </div>
        </header>

        <section> 
            <div class='define'>
               <div id ="logo"> <img src= "img/logo.gif" alt="Logo" height="50px" width="50px"></div> 
</div> 
               <div id ="contenido">
                <form action="DB-Empresa.php" method="POST">
                
                    <table >
                        <tr>
                            <td>Nombre</td>
                            <td>Número de cliente</td>
                            <td>Límite de crédito</td>
                        </tr>
                        <?php while($u = $resultat->fetch_assoc()){
                                ?>
                            <tr>
                                <td><?php echo utf8_encode($u['nom']); ?></td>
                                <!--echo "<br>";-->
                                <td><?php echo $u['numclie']; ?></td>
                                <td><?php echo $u['limitcredit']; ?></td>
                            </tr>
                        <?php
                            }
                            mysqli_close($con);    
                        ?>
                    </table>
                </form>
                </div>
            </div>
        </section>
    </div>
 
    <footer>  <!-- Pie de pagina -->
        <div class='define'>
        <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Vista previa pdf</button>
                    </span>
        <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Guardar pdf</button>
                    </span>
        </div>
    </footer>
     <!-- Archivos principales Javascript y Bootstrap -->
     <script src="vendor/jquery/jquery.min.js"></script>
              <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>