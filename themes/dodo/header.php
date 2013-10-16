<?php
$a='';
$b='';
$c='';
$d='';
$e='';
$path = $_SERVER["SCRIPT_NAME"];
$file = basename($path);
switch($file)
{
  case "index.php":
  $a='class="active"';
  break;
  case "about.php":
  $b='class="active"';
  break;
  case "blog.php":
  $c='class="active"';
  break;
  case "single.php":
  $c='class="active"';
  break;
  case "product.php":
  $d='class="active"';
  break;
  case "detail.php":
  $d='class="active"';
  break;
  case "contact.php":
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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!--[if IE 7]>
	<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
	<![endif]-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="icon" type="image/png"  href="img/ico/favicon.png">
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
  						<li <?php echo $a; ?>><a href="index.php">Inicio</a></li>
  						<li <?php echo $b; ?>><a href="about.php">Nosotros</a></li>
  						<li <?php echo $c; ?>><a href="blog.php">Noticias</a></li>
  					</ul>
  					<div class="logo visible-desktop">
  						<img src="img/ico/favicon.png" alt="responsive catalog themes">
  					</div>
  					<div id="brand" class="visible-desktop">&nbsp;</div>
  					<ul class="nav nav-right">
  						<li <?php echo $d; ?>><a href="product.php">Productos</a></li>
  						<li <?php echo $e; ?>><a href="contact.php">Contáctanos</a></li>
  						<!-- <li class="dropdown">
  							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
  							<ul class="dropdown-menu animated fadeInUp">
  								<li><a href="product.php">Producto 1</a></li>
  								<li><a href="product.php">Producto 2</a></li>
  								<li><a href="product.php">Producto 3</a></li>
  								<li class="divider"></li>
  								<li><a href="product.php">Producto 4</a></li>
  								<li><a href="product.php">Producto 5</a></li>
  							</ul>
  						</li> -->
  					</ul>
  				</div><!-- /.nav-collapse -->
  			</div>
  		</div><!-- /navbar-inner -->
  	</div>