	<div class="heads">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h2><span>//</span> Error</h2>
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<ul class="breadcrumb">
					  <li><a href="index">Inicio</a> <span class="divider">/</span></li>
					  <li class="active"> Error <?php echo $code; ?></li>
					</ul>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span8">
					<h3>Esto es un derrame de tinta!</h3>
					<p>Le ofrecemos nuestras disculpas.</p>
					<p id="about">No podemos encontrar lo que usted esta buscando. Estamos trabajando para solucionarlo.</p>
					<p>Puede intentar:</p>
					<p><a href="<?php echo Yii::app()->request->baseUrl; ?>">Ir al inicio</a> | <a href="javascript:history.back()">Regresar a la página anterior</a></p>
				</div>
				<div class="span4">
					<img src="img/paint.jpg" alt="">
				</div>
			</div>
		</div>
	</div>