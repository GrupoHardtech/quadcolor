<?php
/* @var $this Controller */
$a='';
$b='';
$c='';
$d='';
$e='';
switch($this->action->id)
{
  case "index":
  $a='class="active"';
  break;
  case "about":
  $b='class="active"';
  break;
  case "product":
  $c='class="active"';
  break;
  case "detail":
  $c='class="active"';
  break;
  case "contact":
  $d='class="active"';
  break;
  case "login":
  $e='class="active"';
  break;
}
?>
<!DOCTYPE html>
<html lang="es">
  
<head>
  <meta charset="utf-8">
  <title>QuadColor International</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="QuadColor International">
  <meta name="keywords" content="QuadColor, tintas, Quadcolor, quadColor, quadcolor">
  <meta name="author" content="QuadColor International">

  <!-- Le styles -->
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <!-- Owl stylesheet -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/owl.carousel.css">

	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/ccss/font-awesome-ie7.min.css">
	<![endif]-->

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="icon" type="image/png"  href="<?php echo Yii::app()->theme->baseUrl; ?>/img/ico/favicon.png">
</head>

  <body>
	
  	<div class="navbar navbar-fixed-top">
  		<div class="navbar-inner">
  			<div class="container">
  				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</a>
  				<div class="nav-collapse collapse navbar-responsive-collapse">
  					<ul class="nav nav-left">
  						<li <?php echo $a; ?>><a href="index">Inicio</a></li>
  						<li <?php echo $b; ?>><a href="about">Nosotros</a></li>
              <li <?php echo $c; ?>><a href="product">Productos</a></li>
  					</ul>
  					<div class="logo visible-desktop">
  						<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/ico/favicon.png" alt="responsive catalog themes">
  					</div>
  					<div id="brand" class="visible-desktop">&nbsp;</div>
  					<ul class="nav nav-right">
              <li <?php echo $d; ?>><a href="contact">Contáctanos</a></li>
  						<li <?php echo $e; ?>><a href="contact">Ingresar</a></li>
  						<!-- <li class="dropdown">
  							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
  							<ul class="dropdown-menu animated fadeInUp">
  								<li><a href="product">Producto 1</a></li>
  								<li><a href="product">Producto 2</a></li>
  								<li><a href="product">Producto 3</a></li>
  								<li class="divider"></li>
  								<li><a href="product">Producto 4</a></li>
  								<li><a href="product">Producto 5</a></li>
  							</ul>
  						</li> -->
  					</ul>
  				</div><!-- /.nav-collapse -->
  			</div>
  		</div><!-- /navbar-inner -->
  	</div>

	<?php echo $content; ?>

	<div id="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h3>Sigamos en contacto</h3>
					<p>Para estar siempre en contacto y saber las ultimas noticias de nosotros, puedes hacerlo mediante las redes sociales.</p>
					<div class="icon">
						<!-- <span class="twitter"><a href="#" class="social-icon"><i class="icon-twitter"></i></a></span> -->
						<!-- <span class="linkedin"><a href="#" class="social-icon"><i class="icon-linkedin"></i></a></span> -->
						<span class="facebook"><a href="https://www.facebook.com/quadcolorinternational" class="social-icon" target="_blank"><i class="icon-facebook"></i></a></span>
						<span class="youtube"><a href="http://www.youtube.com/user/TintasQuadColor" class="social-icon" target="_blank"><i class="icon-youtube"></i></a></span>
						<!-- <span class="google"><a href="#" class="social-icon"><i class="icon-google-plus"></i></a></span> -->
					</div>
					<div class="sitemap">
						<ul>
							<li><a href="index">INICIO</a></li>
							<li><a href="about">ACERCA</a></li>
							<!-- <li><a href="profile">PERFIL</a></li> -->
							<li><a href="contact">CONTACTANOS</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="copyright">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<small>Copyright &copy; 2013 por QuadColor International. Todos los derechos reservados.</small>
				</div>
			</div>
		</div>
	</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/owl.carousel.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/gmap3.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js"></script>

  </body>

</html>