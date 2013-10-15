<?php

$this->widget('bootstrap.widgets.TbNavbar', array(
	// 'brand' => $this->module_title,
    'collapse'=>true,
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => array(
                array('label' => $this->module_title, 'url' => array("/{$this->module->id}/default/index")),
                array('label' => 'Categorías', 'url' => array("/{$this->module->id}/category/index")),
                // array('label' => 'Líneas', 'url' => array("/{$this->module->id}/line/index")),
                // array('label' => 'Sublíneas', 'url' => array("/{$this->module->id}/subline/index")),
                array('label' => 'Marcas', 'url' => array("/{$this->module->id}/mark/index")),
                array('label' => 'Productos', 'url' => array("/{$this->module->id}/product/index")),
                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
            'firstItemCssClass'=>'firstItem',
        ),
    ),
));

return;


$a='';
$b='';
$c='';
$d='';
$e='';
$f='';
$g='';
$h='';
$i='';
$j='';
if ($this->id=='group') {
	switch($this->action->id)
	{
		case 'index':
		$a='class="active open"';
		$b='class="active"';
		break;
	}
}
if ($this->id=='line') {
	switch($this->action->id)
	{
		case 'index':
		$c='class="active open"';
		$d='class="active"';
		break;
	}
}
if ($this->id=='subline') {
	switch($this->action->id)
	{
		case 'index':
		$e='class="active open"';
		$f='class="active"';
		break;
	}
}
if ($this->id=='mark') {
	switch($this->action->id)
	{
		case 'index':
		$g='class="active open"';
		$h='class="active"';
		break;
	}
}
if ($this->id=='product') {
	switch($this->action->id)
	{
		case 'index':
		$i='class="active open"';
		$j='class="active"';
		break;
	}
}


?>
<div id="sidebar" class="menu-min fixed">
	<ul class="nav nav-list">
		<li <?php echo $a; ?>><a href="#" class="dropdown-toggle"><i class="icon-th-large"></i><span>Grupos</span><b class="arrow icon-angle-down"></b></a>
			<ul class="submenu">
				<li <?php echo $b; ?>><a href="<?php echo Yii::app()->request->baseUrl."/".$this->module->id; ?>/group"><i class="icon-double-angle-right"></i>Listar</a></li>
			</ul>
		</li>
		<li <?php echo $c; ?>><a href="#" class="dropdown-toggle"><i class="icon-reorder"></i><span>Lineas</span><b class="arrow icon-angle-down"></b></a>
			<ul class="submenu">
				<li <?php echo $d; ?>><a href="<?php echo Yii::app()->request->baseUrl."/".$this->module->id; ?>/line"><i class="icon-double-angle-right"></i>Listar</a></li>
			</ul>
		</li>
		<li <?php echo $e; ?>><a href="#" class="dropdown-toggle"><i class="icon-sitemap"></i><span>Sub-lineas</span><b class="arrow icon-angle-down"></b></a>
			<ul class="submenu">
				<li <?php echo $f; ?>><a href="<?php echo Yii::app()->request->baseUrl."/".$this->module->id; ?>/subline"><i class="icon-double-angle-right"></i>Listar</a></li>
			</ul>
		</li>
		<li <?php echo $g; ?>><a href="#" class="dropdown-toggle"><i class="icon-bookmark"></i><span>Marcas</span><b class="arrow icon-angle-down"></b></a>
			<ul class="submenu">
				<li <?php echo $h; ?>><a href="<?php echo Yii::app()->request->baseUrl."/".$this->module->id; ?>/mark"><i class="icon-double-angle-right"></i>Listar</a></li>
			</ul>
		</li>
		<li <?php echo $i; ?>><a href="#" class="dropdown-toggle"><i class="icon-inbox"></i><span>Productos</span><b class="arrow icon-angle-down"></b></a>
			<ul class="submenu">
				<li <?php echo $j; ?>><a href="<?php echo Yii::app()->request->baseUrl."/".$this->module->id; ?>/product"><i class="icon-double-angle-right"></i>Listar</a></li>
			</ul>
		</li>
	</ul><!--/.nav-list-->
	<div id="sidebar-collapse"><i class="icon-double-angle-left icon-double-angle-right"></i></div>
</div>