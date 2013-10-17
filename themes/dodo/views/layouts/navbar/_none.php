<?php
$this->widget('bootstrap.widgets.TbNavbar', array(
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => array(
                array('label' => $this->module_title, 'url' => array('/site/index')),
                array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                array('label' => 'Contact', 'url' => array('/site/contact')),
                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
            'firstItemCssClass'=>'firstItem',
        ),
    ),
));

return;
?>


<div id="sidebar">
    <ul class="nav nav-list">
        <li class="active"><a href="#"><i class="icon-dashboard"></i><span>Sales</span></a></li>
        <li><a href="#"><i class="icon-text-width"></i><span>Sales</span></a></li>
        <li><a href="#" class="dropdown-toggle"><i class="icon-desktop"></i><span>Sales</span><b class="arrow icon-angle-down"></b></a>
            <ul class="submenu">
                <li><a href="#"><i class="icon-double-angle-right"></i>Sales</a></li>
                <li><a href="#"><i class="icon-double-angle-right"></i>Sales &amp; Icons</a></li>
                <li><a href="#"><i class="icon-double-angle-right"></i>Sales</a></li>
            </ul>
        </li>
    </ul><!--/.nav-list-->
    <div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>
</div>