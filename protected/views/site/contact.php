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
                    <li><a href="index">Inicio</a> <span class="divider">/</span></li>
                    <li class="active">Contáctanos</li>
                </ul>
            </div>
        </div>
        <div class="row-fluid">
            <?php
            if (Yii::app()->user->hasFlash('success') || Yii::app()->user->hasFlash('warning') || Yii::app()->user->hasFlash('error')) {
                $this->widget('bootstrap.widgets.TbAlert', array(
                    'alerts' => array('success', 'warning', 'error'),
                    ));
            }
            ?>
        </div>
        <div class="row-fluid">
            <div class="span12 t-center">
                <h3>Si tiene consultas comerciales u otras preguntas, por favor llene el siguiente formulario para contactar con nosotros. Gracias. </h3>
            </div>
        </div>
        <div class="row-fluid padd20-top-btm">

            <h4>Enviar mensaje</h4>
            <?php
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'contact-form',
                'type' => 'inline',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                    ),
                ));
                ?>

                <?php // echo $form->errorSummary($data['model']); ?>

                <div id="form-1" class="row-fluid">
                    <div class="span5">
                        <?php echo $form->textField($data['model'], 'name', array('class' => 'span12', 'placeholder' => "Escribe tu nombre", 'required' => true)); ?>

                        <?php echo $form->emailField($data['model'], 'email', array('class' => 'span12', 'placeholder' => "Escribe tu correo", 'required' => true)); ?>

                        <?php echo $form->textField($data['model'], 'subject', array('class' => 'span12', 'size' => 60, 'maxlength' => 128, 'placeholder' => "Escribe el asunto", 'required' => true)); ?>
                    </div>
                    <div class="span7">
                        <?php echo $form->textArea($data['model'], 'body', array('class' => 'span12', 'rows' => 9, 'placeholder' => "Escribe tu mensaje", 'required' => true)); ?>

                    </div>
                </div>

                <div id="form-2" class="row-fluid">
                    <div class="span7"></div>
                    <div class="span3">
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType' => 'submit',
                        'type' => 'warning',
                        'size' => 'large',
                        'label' => 'Enviar mensaje',
                        'block' => true
                        ));
                        ?>
                    </div>
                </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>