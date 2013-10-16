<?php include('header.php'); ?>
	
	<div class="heads">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h2><span>//</span> Contáctanos</h2>
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content contact">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<ul class="breadcrumb">
					  <li><a href="index.php">Inicio</a> <span class="divider">/</span></li>
					  <li class="active">Contáctanos</li>
					</ul>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span12 t-center">
					<!-- <h3>Lorem ipsum dolor sit amet</h3> -->
					<h3>Si tiene consultas comerciales u otras preguntas, por favor llene el siguiente formulario para contactar con nosotros. Gracias. </h3>
				</div>
			</div>
			<div class="row-fluid padd20-top-btm">
				<div class="span5">
					<h4>Enviar mensaje</h4>
					<form method="post" action="">
					<input type="text" name="name" class="span12" placeholder="Escribe tu nombre" required>
					<input type="email" name="email" class="span12" placeholder="Escribe tu correo" required>
					<input type="text" name="subject" class="span12" placeholder="Escribe el asunto" required>
				</div>
				<div class="span7">
					<textarea name="message" class="span12" rows="10" placeholder="Escribe tu mensaje" required></textarea>
					<input type="submit" name="submit" value="Enviar mensaje" class="btn btn-warning btn-block btn-large">
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- <div id="maps"></div> -->
	
<?php include('footer.php'); ?>