<?php
$a="";
$b="";
$c="";
?>
	<div class="heads">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h2><span>//</span> Productos</h2>
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
					  <li><a href="product">Productos</a> <span class="divider">/</span></li>
					  <?php if($id==1){ $a='class="active"';?>
					  <li class="active">Sistema de tinta continua</li>
					  <?php  } elseif ($id==2) {$b='class="active"';?>
					  <li class="active">Paquete de tintas de 120 ml</li>
					  <?php }else{ $c='class="active"';?>
					  <li class="active">Toner compatible</li>
					  <?php } ?>
					</ul>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span9 single-item">
					<div class="row-fluid">
						<div class="span5">
							<div id="itemsingle" class="carousel slide clearfix">
							
								<div class="carousel-inner">
								  <div class="item active">
								  	<?php if($id==1){ $a='class="active"';?>
									<img src="img/sistema01.png" alt="">
								  	<?php  } elseif ($id==2) {$b='class="active"';?>
									<img src="img/cyan_ink.png" alt="">
								  	<?php }else{ $c='class="active"';?>
									<img src="img/toner01.png" alt="">
								  	<?php } ?>
								  </div>
								  <div class="item">
								  	<?php if($id==1){ $a='class="active"';?>
									<img src="img/sistema02.png" alt="">
								  	<?php  } elseif ($id==2) {$b='class="active"';?>
									<img src="img/magenta_ink.png" alt="">
								  	<?php }else{ $c='class="active"';?>
									<img src="img/toner02.png" alt="">
								  	<?php } ?>
								  </div>
								  <div class="item">
								  	<?php if($id==1){ $a='class="active"';?>
									<img src="img/sistema03.png" alt="">
								  	<?php  } elseif ($id==2) {$b='class="active"';?>
									<img src="img/yellow_ink.png" alt="">
								  	<?php }else{ $c='class="active"';?>
								  	<?php } ?>
								  </div>
								</div>
								
								<ol class="carousel-indicators">
									<?php if($id==1){ $a='class="active"';?>
									<li data-target="#itemsingle" data-slide-to="0" class="active"><img src="img/sistema01.png" alt=""></li>
									<li data-target="#itemsingle" data-slide-to="1" class=""><img src="img/sistema02.png" alt=""></li>
									<li data-target="#itemsingle" data-slide-to="2" class=""><img src="img/sistema03.png" alt=""></li>
									<?php  } elseif ($id==2) {$b='class="active"';?>
									<li data-target="#itemsingle" data-slide-to="0" class="active"><img src="img/cyan_ink.png" alt=""></li>
									<li data-target="#itemsingle" data-slide-to="1" class=""><img src="img/magenta_ink.png" alt=""></li>
									<li data-target="#itemsingle" data-slide-to="2" class=""><img src="img/yellow_ink.png" alt=""></li>
								  	<?php }else{ $c='class="active"';?>
									<li data-target="#itemsingle" data-slide-to="0" class="active"><img src="img/toner01.png" alt=""></li>
									<li data-target="#itemsingle" data-slide-to="1" class=""><img src="img/toner02.png" alt=""></li>
								  	<?php } ?>
								  
								</ol>
							
							</div>
						</div>
						<div class="span7">
							<?php if($id==1){ ?>
							<h3>Sistema de tinta continua</h3>
							<p>Imprima sin preocupaciones. Los sistemas de tinta continua QuadColor le garantizan varias semanas de impresión con excelente calidad.</p>
							<!-- <p>Código de producto : <span class="label label-warning">#2120</span></p> -->
							<?php  } elseif ($id==2) {?>
							<h3>Paquete de tintas de 120 ml</h3>
							<p>La presentación más económica de tintas QuadColor para que recargue varias veces su sistema continuo.</p>
							<!-- <p>Código de producto : <span class="label label-warning">#2120</span></p> -->
							<?php }else{ ?>
							<h3>Toner compatible</h3>
							<p>Toner compatible de excelente calidad.</p>
							<!-- <p>Código de producto : <span class="label label-warning">#2120</span></p> -->
							<?php } ?>
							
						</div>
					</div>
					
					<!-- <div class="row-fluid">
						<div class="span12">
							<div class="tabbable">
							  <ul class="nav nav-tabs">
								<li class="active"><a href="#tab1" data-toggle="tab">Más información</a></li>
								<li class=""><a href="#tab2" data-toggle="tab">Reseña</a></li>
								<li class=""><a href="#tab3" data-toggle="tab">Productos relacionados</a></li>
							  </ul>
							  <div class="tab-content">
								<div class="tab-pane active" id="tab1">
								  <p>I'm in Section 1. Etiam luctus, tellus sed varius facilisis, turpis nisl mollis metus, adipiscing scelerisque felis dui ac lacus.
								  Etiam luctus, tellus sed varius facilisis, turpis nisl mollis metus, adipiscing scelerisque felis dui ac lacus.</p>
								</div>
								<div class="tab-pane" id="tab2">
								  <p>Howdy, I'm in Section 2. Etiam luctus, tellus sed varius facilisis, turpis nisl mollis metus, adipiscing scelerisque felis dui ac lacus.
								  Etiam luctus, tellus sed varius facilisis, turpis nisl mollis metus, adipiscing scelerisque felis dui ac lacus.</p>
								</div>
								<div class="tab-pane" id="tab3">
									<div class="row-fluid">
										<ul class="thumbnails">
										  <li class="span4">
											<div class="thumbnail">
											  <a href="detail"><img src="img/manuk.png" alt=""></a>
											  <div class="caption-details">
												<h5>Tinta</h5>
											  </div>
											</div>
										  </li>
										  <li class="span4">
											<div class="thumbnail">
											  <a href="detail"><img src="img/manuk.png" alt=""></a>
											  <div class="caption-details">
												<h5>Tinta</h5>
											  </div>
											</div>
										  </li>
										  <li class="span4">
											<div class="thumbnail">
											  <a href="detail"><img src="img/manuk.png" alt=""></a>
											  <div class="caption-details">
												<h5>Tinta</h5>
											  </div>
											</div>
										  </li>
										</ul>
									</div>
								</div>
							  </div>
							</div>
						</div>
					</div> -->
				</div>
				
				<!--break-->
				
				<div class="span3">
					<div class="row-fluid sidebar">
						<div class="span12">
							<h3>Categorías</h3>
							<ul class="nav nav-tabs nav-stacked">
							  <li <?php echo $a; ?>><?php echo CHtml::link('Sistemas continuos',array('site/detail','id'=>'1')); ?></li>
							  <li <?php echo $b; ?>><?php echo CHtml::link('Tintas', array('site/detail','id'=>'2')) ?></li>
							  <li <?php echo $c; ?>><?php echo CHtml::link('Toners', array('site/detail','id'=>'3')) ?></li>
							</ul>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>