<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

        <?php Yii::app()->bootstrap->register(); ?>

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/myscripts.js"></script>
    </head>

    <body style="padding-top: 40px;">

        <div class="container" id="page">
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>
            <div class="row-fluid">
                <?php echo $content; ?>
            </div>
            <div class="clear"></div>
        </div>
    </body>
</html>
