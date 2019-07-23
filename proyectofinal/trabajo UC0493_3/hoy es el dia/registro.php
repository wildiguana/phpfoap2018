
<?php
    session_start();  //Iniciar una nueva sesión o reanudar la existente
?>

<?php
    // Declaracion de variables:
   $nameError=$emailError=$ApellidoError=$UserError=$PasswordError=$RPasswordError="";
   $name=$email=$Apellido=$User=$Password=$RPassword=$Errores="";
   $Registar=true;
   $Rcorrecto=false;
   $ValidDate=true;
   require("SpiritSocial_Functions.php");  //Incluir funciones
// Codigo para registro Normal
   if (isset($_REQUEST["login"])){  //Si se clica "login" vuelve a la pagina principal
    header('Location:SpiritSocial.php');
    }
   
   if(isset($_REQUEST['submit'])){  //Si se clica en "Sign Up" verifica que todo es correcto
        if (empty($_POST["name"])) {
                $nameError = "Name is required";
        } 
        else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $nameError = "Only letters and white space allowed"; 
                }
        }
        if (empty($_POST["Apellido"])) {
            $ApellidoError ="Surname is required";
        } 
        else {
            $Apellido= test_input($_POST["Apellido"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$Apellido)) {
                $ApellidoError = "Only letters and white space allowed"; 
            }
        }
        
        if (empty($_POST["email"])) {
                $emailError = "E-mail is required";
        } 
        else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailError = "Invalid email format"; 
                }
        }
        if (empty($_POST["User"])) {
            $UserError = "User is required";
        } 
        else {
                $User = test_input($_POST["User"]);
        }
        if (empty($_POST["Password"])) {
            $PasswordError = "Password is required";
        } 
        else {
                $Password = test_input($_POST["Password"]);
        }
        if (empty($_POST["RPassword"])) {
            $RPasswordError = "Password is required";
        } 
        else {
                $RPassword = test_input($_POST["RPassword"]);
        }
        if ((empty($PasswordError)) && (empty($RPasswordError)) ){
            if($Password != $RPassword){ //Las contraseñas no coinciden.
                $Registar=false;
                $Errores=""; 
            }
            else{  // Las contraseñas coinciden.
                $Errores=valida_contrasena($Password,$Errores);
                $Registar=true;   
            }
        }
        
/*         if(($_REQUEST["name"]=="sdk") && ($_REQUEST["Password"]=="Sdk1234!")) { // Si U o C son correctos enviar a la pagina restringida
            $_SESSION["login"]=true;
            $_SESSION["ValidUser"]="sdk";
            $_SESSION["ValidPassword"]=md5("Sdk1234!");
        } */    
        if (empty($nameError) && empty($ApellidoError) && empty($emailError) && empty($UserError) && empty($PasswordError) && empty($RPasswordError) && empty($Errores) && $Registar==true){
            $Rcorrecto=true;
        }
        else{
            $Rcorrecto=false;
        }
    }
?>
<!DOCTYPE html>
<html class="no-js" lang="en"><!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Appley is a Responsive HTML5 CSS3 Theme perfect for your business and presentation of your application.">
	<meta name="keywords" content="Software, Html5, Responsive Template, Landing Page, Landing Template, Bootstrap Responsive Template, Bottstrap Design, App, App Template">
	<meta name="robots" content="index,follow">

    <title>te dejo - Crossbooking - música - películas | ThemezHub</title>
    
    <!-- All Plugins Css -->
    <link href="css/plugins.css" rel="stylesheet">
    
    <!-- Custom style -->
    <link href="css/overwrite.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
	</head>
	<body>
		<div class="wrapper">  
		<!-- Start Navigation -->
		<nav class="navbar navbar-default navbar-fixed white bootsnav on no-full">

			<div class="container">            
				<!-- End Atribute Navigation -->
				
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="#brand"><img src="img/logo.png" class="logo" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Begin: Navbar Section -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" id="my-navigation" data-in="fadeInDown" data-out="fadeOutUp">
						<li  class="active scroll"><a href="#home">Inicio</a></li>
                        <li class="scroll"><a href="#contact">Contáctanos</a></li>
                        <li class="scroll"><a href="#screens">Salir</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- End Navigation -->

		<div class="clearfix"></div>
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="banner" id="home" style="background:url(img/banner.jpeg) no-repeat;">  
			<!-- Wrapper for carousel items -->
			<div class="container">
				<div class="banner-caption">		
					<div class="col-md-7 col-sm-12 banner-text">
						<h1>Todos los datos son obligatorios</h1>
						<form method="post" action="<php echo htmlspecialchars($_SERVER"["PHP_SELF"])">
            
                        <section>  <!-- Contenido de la pagina -->
                <div class='define'>
                    <h2><p> Register new account</span></p></h2>
                      <form action="SpiritSocial_SignUp.php" method="POST">
                        Nombre:     <input type="text" name="name" value="<?php echo $name;?>">
                        <span class="error">* <?php echo $nameError;?></span>
                        <br><br>
                        Apellido: <input type="text" name="Apellido" value="<?php echo $Apellido;?>">
                        <span class="error">* <?php echo $ApellidoError;?></span>
                        <br><br>
                        E-mail:   <input type="email" name="email" value="<?php echo $email;?>">
                        <span class="error">* <?php echo $emailError;?></span>
                        <br><br>
                        Contraseña:     <input type="password" name="Password" value="<?php echo $Password;?>">
                        <span class="error">* <?php echo $PasswordError;?></span>
                        <br><br>
                        Repita contraseña:     <input type="password" name="RPassword" value="<?php echo $RPassword;?>">
                        <span class="error">* <?php echo $RPasswordError;?></span>
                        <br><br>
                        <input type="submit" name="submit" value="Sign Up"> 
                    
                        <?php
                            if($Registar==false){
                        ?>
                                <p><span class="error">* Las contraseñas no coinciden</span></p>
                        <?php   
                            }
                            
                            if ($Errores !=""){
                        ?>
                                <p><span class="N">Errores en la contraseña</span></p>
                                <?php echo $Errores;?>
                                <br>
                        <?php
                            }
                        ?>
                        <?php    
                            if ($Rcorrecto==true && $Registar==true && $Errores==""){  //Si todo es correcto muetra el mensage.
                                // Si se ha creado el usuario correctamente pasarlo a base de datos
                                newuser($_REQUEST["name"], $_REQUEST["Apellido"], $_REQUEST["email"], $_REQUEST["User"], $_REQUEST["Password"]); 
                        ?>
                                <br>
                                <p><b><span class="nota">* Account registered correctly in Spirit Social</span></b></p>
                                <br>
                                <p><b><span class="correcto"> "Spirit Social helps you communicate and share</span></b></p>
                                <br>
                                <p><b><span class="correcto"> with the people who are part of your life"</span></b></p>
                                <br><br>
                                <p><b><span class="nota"> Click in Login to start </span></b></p>
                                <br>
                                <input type="submit" name="login" value="Login">
                        <?php     
                            }
                        ?>
                                 
                    </form>    
                </div>
            </section>
					<div class="col-md-5 hidden-sm hidden-xs">
						<img src="img/iphone.png" class="img-responsive" alt="iphone" />
					</div>
				</div>
			</div>
		</div>
</body>
</html>