<?php
$this->widget('bootstrap.widgets.TbNavbar', array(
    // 'brand' => $this->module_title,
    'collapse' => true,
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => array(
                array('label' => $this->module_title, 'url' => array('/admin/default/index')),
                array('label' => 'Areas', 'url' => array('/admin/area/index')),
                array('label' => 'Puestos', 'url' => array('/admin/station/index')),
                array('label' => 'Cliente', 'url' => array('/admin/client/index')),
                array('label' => 'Empleados', 'url' => array('/admin/employee/index')),
                array('label' => 'Proveedores', 'url' => array('/admin/provider/index')),
                array('label' => 'Historial', 'url' => array('/admin/changelog/index')),
                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
            'firstItemCssClass'=>'firstItem',
        ),
    ),
));


return;
$a = '';
$b = '';
$c = '';
$d = '';
$e = '';
$f = '';
$g = '';
$h = '';
$i = '';
$j = '';
if ($this->id == 'area') {
    switch ($this->action->id) {
        case 'index':
            $a = 'class="active open"';
            $b = 'class="active"';
            break;
    }
}
if ($this->id == 'employee') {
    switch ($this->action->id) {
        case 'index':
            $c = 'class="active open"';
            $d = 'class="active"';
            break;
    }
}
if ($this->id == 'user') {
    switch ($this->action->id) {
        case 'index':
            $e = 'class="active open"';
            $f = 'class="active"';
            break;
    }
}
if ($this->id == 'authitem') {
    switch ($this->action->id) {
        case 'index':
            $g = 'class="active open"';
            $h = 'class="active"';
            break;
    }
}
if ($this->id == 'authassignment') {
    switch ($this->action->id) {
        case 'index':
            $i = 'class="active open"';
            $j = 'class="active"';
            break;
    }
}
?>
<div id="sidebar" class="menu-min fixed">
    <ul class="nav nav-list">
        <li <?php echo $a; ?>><a href="#" class="dropdown-toggle"><i class="icon-flag"></i><span>�?reas</span><b class="arrow icon-angle-down"></b></a>
            <ul class="submenu">
                <li <?php echo $b; ?>><a href="<?php echo Yii::app()->request->baseUrl . "/" . $this->module->id; ?>/area"><i class="icon-double-angle-right"></i>Listar</a></li>
            </ul>
        </li>
        <li <?php echo $c; ?>><a href="#" class="dropdown-toggle"><i class="icon-suitcase"></i><span>Empleados</span><b class="arrow icon-angle-down"></b></a>
            <ul class="submenu">
                <li <?php echo $d; ?>><a href="<?php echo Yii::app()->request->baseUrl . "/" . $this->module->id; ?>/employee"><i class="icon-double-angle-right"></i>Listar</a></li>
            </ul>
        </li>
        <li <?php echo $e; ?>><a href="#" class="dropdown-toggle"><i class="icon-user"></i><span>Usuarios</span><b class="arrow icon-angle-down"></b></a>
            <ul class="submenu">
                <li <?php echo $f; ?>><a href="<?php echo Yii::app()->request->baseUrl . "/" . $this->module->id; ?>/user"><i class="icon-double-angle-right"></i>Listar</a></li>
            </ul>
        </li>
        <!-- <li <?php echo $g; ?>><a href="#" class="dropdown-toggle"><i class="icon-exclamation-sign"></i><span>Autorizaciones</span><b class="arrow icon-angle-down"></b></a>
                <ul class="submenu">
                        <li <?php echo $h; ?>><a href="<?php echo Yii::app()->request->baseUrl . "/" . $this->module->id; ?>/authitem"><i class="icon-double-angle-right"></i>Crear ítem</a></li>
                        <li <?php echo $i; ?>><a href="<?php echo Yii::app()->request->baseUrl . "/" . $this->module->id; ?>/authassignment"><i class="icon-double-angle-right"></i>Asignar ítem</a></li>
                        <li <?php echo $j; ?>><a href="<?php echo Yii::app()->request->baseUrl . "/" . $this->module->id; ?>/user"><i class="icon-double-angle-right"></i>Listar</a></li>
                </ul>
        </li> -->
    </ul><!--/.nav-list-->
    <div id="sidebar-collapse"><i class="icon-double-angle-left icon-double-angle-right"></i></div>
</div>