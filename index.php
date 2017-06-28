<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Mutante - Planilla de contacto';
    $to = 'tdm1094@gmail.com';
    $subject = 'Mensaje de planilla de contacto ';
    $body ="Remitente: $name\n E-Mail: $email\n Mensaje:\n $message";
}
// Check if name has been entered
if (!isset($_POST) || !key_exists('name', $_POST)) {
    $errName = 'Por favor, introducí tu nombre';
}
// Check if email has been entered and is valid
if (!isset($_POST) || !key_exists('email', $_POST) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Por favor, introducí un email válido';
}
//Check if message has been entered
if (!isset($_POST) || !key_exists('message', $_POST)) {
    $errMessage = 'Por favor, introducí tu mensaje';
}
//Check if simple anti-bot test is correct
if (!isset($human) || $human !== 5) {
    $errHuman = 'Tu respuesta es incorrecta';
}
// If there are no errors, send the email
if (!isset($errName) && !isset($errEmail) && !isset($errMessage) && !isset($errHuman)) {
    $result = mail($to, $subject, $body, $from);
    if (isset($result)) {
        echo "<script>window.open('index.php#form-anchor' , '_self')</script>";
        $result .= '<div class="alert alert-success">Gracias! Te responderemos en breve.</div>';
    } else {
        echo "<script>window.open('index.php#form-anchor' , '_self')</script>";
        $result .= '<div class="alert alert-danger">Hubo un error al enviar tu mensaje. Por favor, volvé a intentar luego.</div>';
    }
}
/**
 * if you want to send real mail, substitute mail for fakemail
 * with the same parameters.
 *
 * @param $to
 * @param $subject
 * @param $body
 * @param $from
 * @return string faking mail output.
 
function fakemail($to, $subject, $body, $from) {
    $result = "<br/>Enviando mail a $to de $from con el asunto $subject y cuerpo <p>$body</p>";
    return $result;
}*/
function showPost($name) {
    if (isset($_POST[$name])) {
        echo htmlspecialchars($_POST[$name]);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mutante|Tinturas Fantasía</title>
    <meta name="description" content="Mutante Tinturas Fantasía La Plata">
    <meta name="keywords" content="mutante, tinturas, tinturas fantasía, La Plata">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Roboto+Condensed">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- =======================================================
        Theme Name: Laura
        Theme URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
      <div class="bg-color">
        <header id="main-header" class="img-responsive">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Mutante</a>
            </div>
            <div class="collapse navbar-collapse" id="lauraMenu">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li class="active"><a href="#main-header">Inicio</a></li>
                <li><a href="#about">Quiénes Somos</a></li>
                <li><a href="#portfolio">Nuestros Productos</a></li>
                <li><a href="#faq">Preguntas Frecuentes</a></li>
                <li><a href="#testimonial">Testimonios</a></li>
                <li><a href="#contact">Contactanos</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
                <h2>Mutante</h2>
                <p>Tinturas fantasía</p>
              </div>
              <div class="overlay-detail text-center">
                  <a href="#about"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
  <section id="about" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-right">
          <h2 class="title-text">
            Conocenos<br><span class="deco">Mutante</span> Tinturas
          </h2>
        </div>
        <div class="col-md-6 text-left">
          <div class="about-text">
            <p>MUTANTE es una marca de tinturas color fantasía producida artesanalmente en La Plata, Buenos Aires.  Nuestros productos apuntan a la conciencia y al cuidado de nuestro cuerpo que es un tesoro, por lo que no utilizamos agregados químicos ni necesitan mezclarse con oxidantes. 
Nuestras tinturas son aptas para uso vegano, ya que no son testeadas en animales, se pueden mezclar entre sí para formar nuevos colores y se pueden aplicar la cantidad de veces que necesites ya que no daña la cutícula.</p>
            <p>&nbsp;</p>
            <p>Actualmente contamos con un catálogo de diez colores, además de nuestras líneas de shampoo matizador y oro líquido.</p>
            <p>&nbsp;</p>
            <ul class="abt-list">
              <li>-	Entregas en la ciudad de La Plata</li>
              <li>- Envíos al interior del país</li>
              <li>-	Venta por mayor y menor</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center">Lo que <span class="deco">hacemos</span></h2>
        </div>
        <div class="col-md-12">
          <div id="myGrid" class="grid-padding">
          <div class="col-md-4 col-sm-4 padding-right-zero">
            <img src="img/portfolio01.jpg" class="img-responsive">
            <img src="img/port02.jpg" class="img-responsive">
            <img src="img/port03.jpg" class="img-responsive">
          </div>
          <div class="col-md-4 col-sm-4 padding-right-zero">
            <img src="img/port04.jpg" class="img-responsive">
            <img src="img/port05.jpg" class="img-responsive">
            <img src="img/port06.jpg" class="img-responsive">
          </div>
          <div class="col-md-4 col-sm-4 padding-right-zero">
            <img src="img/port07.jpg" class="img-responsive">
            <img src="img/port08.jpg" class="img-responsive">
            <img src="img/portfolio02.jpg" class="img-responsive">
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="faq" class="section-padding wow fadeIn delay-05s">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-6 text-right">
	        <h2 class="title-text">
	          Preguntas<br>Frecuentes
	        </h2>
	      </div>
	      <div class="col-md-6 text-left">
	        <div class="about-text">
	          <p>¿Hacen envíos al interior?</p>
	          <p><b>Sí</b> ¡Nos encanta contactarnos con gente de todo este inmenso país!</p>
	          <p>&nbsp;</p>
	          <p>¿Cuánto cuestan las tinturas?</p>
	          <p>Tenemos dos listas de precios, al por mayor y al por menor. Podés consultarnos por privado, te respondemos todas tus dudas y hasta te aconsejamos.</p>
	          <p>&nbsp;</p>
	          <p>¿Que duración tienen?</p>
	          <p>Duran alrededor de 15 lavados, dependiendo del nivel de decoloración previa.</p>
	          <p>&nbsp;</p>
	          <p>¿Qué colores tienen disponibles?</p>
	          <ul>
	          	<li>- Azul</li>
	          	<li>- Turquesa</li>
	          	<li>- Violeta</li>
	          	<li>- Magenta</li>
	          	<li>- Verde inglés</li>
	          	<li>- Verde Lima</li>
	          	<li>- Amarillo</li>
	          	<li>- Naranja</li>
	          	<li>- Rojo</li>
	          	<li>- Gris</li>
	          	<li>- Remolacha</li>
	          </ul>
	          <p>&nbsp;</p>
	          <p>¿Venden colores pastel?</p>
	          <p>No los vendemos como tal, pero se pueden pastelizar todos nuestros colores rebajando la tintura con un buen acondicionador, dejándola siempre dos tonos más oscuro de lo que queremos que quede en nuestro cabello.</p>
	          <p>&nbsp;</p>
	        </div>
	      </div>
	    </div>
	  </div>
  </section>
  <section id="testimonial" class="section-padding wow fadeInUp">
    <div class="container">
      <div class="row">
        <h2 class="title text-center">¿Qué dicen nuestrxs <span class="deco">Clientxs</span>?</h2>
        <div class="test-sec">
          <div class="col-sm-6">
            <blockquote>
              <p>Muy buenos colores, y muy bueno el producto en sí, no te daña el pelo y los colores son super resistentes. Recontra recomiendo!!!</p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">Ana Alba</span> <span class="testimonials-post">La Plata</span> </div>
            </div>
          </div>
          <div class="col-sm-6">
            <blockquote>
              <p>Una de las mejores que probé y encima natural. Los colores son re únicos y además se pueden mezclar y conseguir tonos increíbles, recomendadas al 100%</p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">Mel Tedesco</span> <span class="testimonials-post">La Plata</span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-sec text-center">
            <h2>¿Querés <span class="deco">contactarnos</span>?</h2>
            <p>Podés mandarnos tu mensaje mediante este formulario o a través de nuestra página de <a href="https://www.facebook.com/MutanteTinturas/">Facebook</a>.</p>
          </div>
        </div>
        <!--Tutorial https://bootstrapbay.com/blog/working-bootstrap-contact-form/ -->
        <div class="col-md-8 col-md-push-2">
      		<form class="form-horizontal" id="form-anchor" role="form" method="post" action="index.php#form-anchor">
	          <div class="form-group">
							<label for="name" class="col-sm-2 control-label">Nombre</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="Nombre y Apellido" value="<?php showPost('name'); ?>">
								<?php if (isset($errName)) echo "<p class='text-danger'>$errName</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com" value="<?php showPost('email'); ?>">
								<?php if (isset($errEmail)) echo "<p class='text-danger'>$errEmail</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-2 control-label">Mensaje</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" name="message"><?php showPost('message');?></textarea>
								<?php if (isset($errMessage)) echo "<p class='text-danger'>$errMessage</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="human" name="human" placeholder="Tu Respuesta" value="<?php showPost('human'); ?>">
								<?php if (isset($errHuman)) echo "<p class='text-danger'>$errHuman</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
							<?php if (isset($result)) {echo $result;} /*else { echo "Sin resultado aún.";}*/?>
	          </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <!--end row-->
      <div class="row">
          <div class="col-md-6">
              <div class="footer">
                  © Copyright Laura Theme. All Rights Reserved
                    <div class="credits">
                            <!-- All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Laura -->                        
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
                    </div>
              </div>
          </div>
          <div class="col-md-6 text-right">
              <ul class="social-list">
                  <li>
                      <a href="https://www.facebook.com/MutanteTinturas/">
                          <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.instagram.com/mutantetinturas/">
                          <i class="fa fa-instagram"></i>
                      </a>
                  </li>
              </ul>
          </div>
          
      </div>
      <!--end row-->
    </div>
  </footer>
  
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>