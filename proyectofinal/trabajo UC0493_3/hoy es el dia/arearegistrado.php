<!DOCTYPE html>
<html class="no-js" lang="es"><!--<![endif]-->
	<head>

	<title>te dejo | bookcrossing: music & movie | comparte</title>

	<link rel="icon" href="img/favicon.gif" type="image/gif" sizes="16x16">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Te dejo es una web para el intercambio de libros, música y películas entre miembros.">
	<meta name="keywords" content="bookcrossing, musiccrossing, moviecrossing, info page, register page, acces page, objective, app, share">
	<meta name="robots" content="index,follow">
    
    <!-- All Plugins Css -->
    <link href="css/plugins.css" rel="stylesheet">
    
    <!-- Custom style -->
    <link href="css/overwrite.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/cajacookies.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
	<![endif]-->

	<!--jquery para mensaje cookies-->
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    
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
					<a class="navbar-brand" href="#brand"><img src="img/react-icon.ico" class="logo" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Begin: Navbar Section -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" id="my-navigation" data-in="fadeInDown" data-out="fadeOutUp">
						<li  class="active scroll"><a href="#home">Inicio</a></li>
						<li class="scroll"><a href="#features">Propuesta</a></li>
						<li class="scroll"><a href="#services">Usuarios</a></li>
						<li class="scroll"><a href="nuevousuario.html">Nuevo usuario</a></li>
						<li class="scroll"><a href="#video">Cómo funciona</a></li>
						<li class="scroll"><a href="#screens">Descarga la app</a></li>
						<li class="scroll"><a href="#contact">Contáctanos</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- End Navigation -->

		<!--Caja cookies-->

		<script>
			/* ésto comprueba la localStorage si ya tiene la variable guardada */
			function compruebaAceptaCookies() {
			  if(localStorage.aceptaCookies == 'true'){
				cajacookies.style.display = 'none';
			  }
			}
			
			/* aquí guardamos la variable de que se ha
			aceptado el uso de cookies así no mostraremos
			el mensaje de nuevo */
			function aceptarCookies() {
			  localStorage.aceptaCookies = 'true';
			  cajacookies.style.display = 'none';
			}
			
			/* ésto se ejecuta cuando la web está cargada */
			$(document).ready(function () {
			  compruebaAceptaCookies();
			});
			</script>

		<div id="cajacookies">
			<p><button onclick="aceptarCookies()" class="pull-right"><i class="fa fa-times"></i> Aceptar y cerrar éste mensaje</button>
			Éste sitio web usa cookies, si permanece aquí acepta su uso.
			Puede leer más sobre el uso de cookies en nuestra <a href="politica.html">política de privacidad</a>.
			</p>
			</div>

		<div class="clearfix"></div>
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="banner" id="home" style="background:url(img/banner.jpeg) no-repeat;">  
			<!-- Wrapper for carousel items -->
			<div class="container">
				<div class="banner-caption">		
					<div class="col-md-7 col-sm-12 banner-text">
						<h1>Descarga la aplicación y comparte!</h1>
						<a href="#" class="banner-btn download-btn" title="download" ><i class="fa fa-android"></i><h4>Google Play</h4></a>
						<a href="#" class="banner-btn login-btn" title="download" ><i class="fa fa-apple"></i><h4>Apple IOS</h4></a>
					</div>
					<div class="col-md-5 hidden-sm hidden-xs">
						<img src="img/iphone.png" class="img-responsive" alt="iphone" />
					</div>
				</div>
			</div>
		</div>
		
		<!-- smart features-->
		<section class="smart-features" id="features">
			<div class="container">
				<div class="row">
					<div class="smart-header">
						<h1>Smart features</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-12 no-padd">
						<div class="col-md-6 col-sm-6 no-padd">
							<div class="features-caption">
								<span class="icon icon-trophy"></span>
								<h3>Responsive Designs</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 no-padd">
							<div class="features-caption">
								<span class="icon icon-layers"></span>
								<h3>Responsive Designs</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 no-padd">
							<div class="features-caption">
								<span class="icon icon-happy"></span>
								<h3>Responsive Designs</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 no-padd">
							<div class="features-caption">
								<span class="icon icon-dial"></span>
								<h3>Responsive Designs</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="img/imack-2.png" alt="imack" class="img-responsive imack" />
					</div>
				</div>
			</div>
		</section>
		
		<section class="dark services" id="services">
			<div class="container">
				<div class="col-md-4 col-sm-6">
					<div class="service-caption">
						<span class="icon-tools"></span>
						<div class="service-content">
							<h4>Introduce tus credenciales</h4>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- video section-->
			<section class="video-sec" id="video" style="background:url(img/video-bg.jpeg) no-repeat">
				<div class="container">
					<div class="row">
						<div class="heading">
							<h2>How it is Works Features</h2>
						</div>
					</div>
					<div class="video-part">
						<a href="#" data-toggle="modal" data-target="#my-video" class="video-btn" alt=""><i class="fa fa-play"></i></a>
					</div>
				</div>
			</section>
			
			<!-- app screen-->

			<section class="screen" id="screens">
				<div class="container">
					<div class="row">
						<div class="row-heading">
							<h2>Check Apps <span>Screens</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>

					<div class="clearfix"></div>
					<!-- Main jumbotron for a primary marketing message or call to action -->
					<div class="banner" id="home" style="background:url(img/banner.jpeg) no-repeat;">  
						<!-- Wrapper for carousel items -->
						<div class="container">
							<div class="banner-caption">		
								<div class="col-md-7 col-sm-12 banner-text">
									<h1>Descarga la aplicación y comparte!</h1>
									<a href="#" class="banner-btn download-btn" title="download" ><i class="fa fa-android"></i><h4>Google Play</h4></a>
									<a href="#" class="banner-btn login-btn" title="download" ><i class="fa fa-apple"></i><h4>Apple IOS</h4></a>
								</div>
								<div class="col-md-5 hidden-sm hidden-xs">
									<img src="img/iphone.png" class="img-responsive" alt="iphone" />
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div id="app-screen" class="owl-carousel owl-theme">
						  <div class="item">
						  <img src="img/screen-1.png" class="img-responsive">
						  </div>
							<div class="item">
								<img src="img/screen-2.png" class="img-responsive">
							</div>
							<div class="item">
								<img src="img/screen-3.png" class="img-responsive">
							</div>
							<div class="item">
								<img src="img/screen-4.png" class="img-responsive">
							</div>
							<div class="item">
								<img src="img/screen-5.png" class="img-responsive">
							</div>
							<div class="item">
								<img src="img/screen-2.png" class="img-responsive">
							</div>
							<div class="item">
								<img src="img/screen-1.png" class="img-responsive">
							</div>
						</div>
						<div class="c ustomNavigation">
						  <a class="btn prev"><i class="fa fa-arrow-left"></i></a>
						  <a class="btn next"><i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</section>
			<!--.End app screen-->
		
			<!-- contact form-->
			<section class="contact dark" id="contact">
				<div class="row">
					<div class="row-heading">
						<h2>Drop A <span>Mensaje</span></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
				<div class="container">
					<div class="col-md-10 col-sm-12 col-md-offset-1">
						<div class="row contact-form">
						<form name="sentMessage" id="contactForm" novalidate>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Your Subject *" id="subject">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
									<p class="help-block text-danger"></p>
								</div>
								<div id="success"></div>
								<button type="submit" class="btn btn-success btn-caption submit">Send Message</button>
							</div>
							</form>
						</div>
					</div>	
				</div>
			</section>
			<!--./End contact form-->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<div class="footer-widget">
						<div class="footer-social">
							<ul class="footer-social-pro">
								<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<div class="footer-widget">
							<ul class="footer-navi">
								<li><a href="#home">Home</a></li>
								<li><a href="#features">Features</a></li>
								<li><a href="#services">Services</a></li>
								<li><a href="#pricing">Pricing</a></li>
								<li><a href="#screens">Screens</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>
						<div class="footer-widget-copy">
							<p>Copyright@ 2018 Appley Design By <a href="https://themezhub.com/">ThemezHub</a></p>
						</div>
					</div>
				</div>
			</footer>
			
			<!-- Video Popup -->
			<div class="modal fade" id="my-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<iframe width="100%" height="315" src="https://www.youtube.com/embed/JNF0moyNw_A" frameborder="0" allowfullscreen></iframe>
						</div>
						</div>
				</div>
			</div>   
			<!-- Video Popup --> 


			
			<!-- START JAVASCRIPT -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script type="text/javascript" src="js/jquery.min.js"></script>
			<script type="text/javascript" src="js/owl.carousel.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<!-- Place this tag in your head or just before your close body tag. -->
			<!-- contact js-->
			<script src="js/jqBootstrapValidation.js"></script>
			<script src="js/contact_me.js"></script>
			
			<script async="" defer="" src="js/buttons.js"></script>
			<script src="js/bootsnav.js"></script>
			<script src="js/custom.js"></script>

			<script type="text/javascript">
			$('.navbar-nav a').click(function(){
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top
			}, 800);
			return false;
			});
			</script>
			<script type="text/javascript">
			$('.footer-navi a').click(function(){
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top
			}, 800);
			return false;
			});
			</script>
		</div>
	</body>
</html>