<?php include 'header.php'; ?>
	
	
	<div class="heads">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h2><span>//</span> Order</h2>
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<ul class="breadcrumb">
					  <li><a href="#">Home</a> <span class="divider">/</span></li>
					  <li class="active">Order</li>
					</ul>
				</div>
			</div>
			
			<div class="row-fluid confirm">
				<form class="form-horizontal" action="" method="post">
				<h3 class="t-center">Order</h3>
				<hr>
				<div class="control-group">
					<label class="control-label">Item Code</label>
					<div class="controls">
					  <input type="text" class="span4" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Quantity</label>
					<div class="controls">
					  <input type="text" class="span4" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Name</label>
					<div class="controls">
					  <input type="text" class="span8" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Email address</label>
					<div class="controls">
					  <input type="email" class="span8" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Phone number</label>
					<div class="controls">
					  <input type="text" class="span8" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Shipping Address</label>
					<div class="controls">
					  <textarea class="span8" rows="8" required></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Payment Method</label>
					<div class="controls">
					  <select class="span8" required>
						<option value="Paypall">Paypall</option>
						<option value="Bank Transfer">Bank Transfer</option>
						<option value="Bitcoins">Bitcoin</option>
					  </select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Notes</label>
					<div class="controls">
					  <textarea class="span8" rows="8"></textarea>
					</div>
				</div>
				<div class="form-actions">
					<input type="submit" value="Order Now" class="btn btn-warning">
			   </div>
			</form>
			</div>
		</div>
	</div>
	
<?php include 'footer.php'; ?>