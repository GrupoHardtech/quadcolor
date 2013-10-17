<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />	
</head>

<body>
	<div class="container-fluid">
		<div id="main-content">
			<div class="row-fluid">
				<div class="span12">
					<div class="login-container">
						<div class="row-fluid">
							<div class="center">
								<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/logos/hardtech.png" alt="HardTech">
								<h4 class="blue text-center">&copy; Nombre de compañia</h4>
							</div>
						</div>
						<?php echo $content; ?>
				</div><!--/span-->
			</div><!--/row-->
		</div>
	</div><!--/.fluid-container-->
</body>
</html>