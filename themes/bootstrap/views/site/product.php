	<div class="heads">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h2><span>//</span> Productos</h2>
				</div>
			</div>
		</div>
	</div>
	
	<div id="catalogue">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<ul class="breadcrumb">
					  <li><a href="index">Inicio</a> <span class="divider">/</span></li>
					  <li class="active">Productos</li>
					</ul>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span12">
					<h2>Estos son nuestros productos</h2>
					<!-- <p>Display all item with category Border Canary</p> -->
					<br>
					<ul class="thumbnails">
					  <li class="span4">
						<div class="thumbnail">
						  <?php echo CHtml::link('<img src="img/sistema01.png" alt="" />',array('site/detail','id'=>'1')); ?>
						  <div class="caption-details">
							<h3>Sistema de tinta continua</h3>
							<!-- <span class="price">$200</span> -->
						  </div>
						</div>
					  </li>
					  <li class="span4">
						<div class="thumbnail">
						  <?php echo CHtml::link('<img src="img/cyan_ink.png" alt="" />', array('site/detail','id'=>'2')) ?>
						  <div class="caption-details">
							<h3>Paquete de tintas de 120 ml</h3>
							<!-- <span class="price">$200</span> -->
						  </div>
						</div>
					  </li>
					  <li class="span4">
						<div class="thumbnail">
						  <?php echo CHtml::link('<img src="img/toner01.png" alt="" />', array('site/detail','id'=>'3')) ?>
						  <div class="caption-details">
							<h3>Toner compatible</h3>
							<!-- <span class="price">$200</span> -->
						  </div>
						</div>
					  </li>
					</ul>
					
					<!-- <div class="pagination pagination-centered">
					  <ul>
						<li class="disabled"><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					 </ul>
					</div> -->
					
				</div>
			</div>
		</div>
	</div>