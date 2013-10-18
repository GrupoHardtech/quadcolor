<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mailer
 *
 * @author Administrador
 */
class Mailer {

    public static function sendExceptionMail(Exception $ex) {

        $adminName = Yii::app()->params['adminName'];
        $adminEmail = Yii::app()->params['adminEmail'];
        $subject = 'Excepción en web de ' . Yii::app()->name;
        $text =
                "<h3>Código: " . $ex->getCode() . "</h3>
                    <h4>Archivo: " . $ex->getFile() . "</h4>
                     <p>Línea: " . $ex->getLine() . "</p>
                  <p>Mensaje: " . $ex->getMessage() . "</p>
                    <p>Trace: " . $ex->getTraceAsString() . "</p>";

        $adresses = array(
            $adminName => $adminEmail
        );

        Mailer::sendMail($adminName, $adminEmail, $subject, $text, $adresses);
    }

    public static function sendMail($name, $email, $subject, $text, $adresses) {

        $adminName = Yii::app()->params['adminName'];
        $adminEmail = Yii::app()->params['adminEmail'];
        $adminPass = Yii::app()->params['adminPass'];

        include('phpmailer/class.phpmailer.php'); //Utilitzacio d'una clase de la llibreria. Canvia ruta si s'escau.
        include("phpmailer/class.smtp.php");

        $mail = new PHPMailer(); //Crea un objecte/instancia.
        $mail->IsSMTP(); // enviament per protocol SMTP
        $mail->IsHTML(true);

//Parametres d enviament (prepara l'objecte). (Si no es definen, s utilitzan els valors de per defecte).
//                    define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']); //Es defineix el "root". Amb aquest cas es fa coincidir amb el root del server. Ajustar si s'escau.
        $mail->SMTPDebug = 2; //Habilita el SMTPDebug per test.
//                        $mail->Host = "smtp.gmail.com"; //Estableix GMAIL com el servidor SMTP.
        $mail->Host = "173.194.67.108"; //Estableix GMAIL com el servidor SMTP.
        $mail->SMTPAuth = true; //Habilita la autenticaciÃ³ SMPT.
        //$mail->SMTPSecure = "tls"; //Estableix el prefix del servidor.
        $mail->SMTPSecure = "ssl"; //Estableix el prefix del servidor.
        //$mail->Port = 587; //Estableix el port SMTP.
        $mail->Port = 465;
        $mail->Username = $adminName; //Username de la conte de correo que s'utilitza com a servei d'enviament.
        $mail->Password = $adminPass; //contrasenya del compte.
//Parametres de Remitents


        $mail->Subject = $subject;
        $mail->AltBody = "Necesita un cliente html"; //Messatge d'advertencia pels usuaris que no utilitzan un client HTML.
        // Construccio del Body i assignacio a variable (body).
        //Utilitzacio de la funcio MsgHTML i utilitzacio de la variable body creada avanÃ§s per compondre el cos del missatge.
        $mail->AddAttachment(Yii::app()->getBaseUrl(true) . "/images/favicon.png");      // attachment


        $mail->MsgHTML(
                "<p>Mensaje enviado desde <label style='font-weight:bold;'>" . Yii::app()->name . "</label></p>
                            <p>Por <label style='font-weight:bold;'>" . $name . "</label></p>
                            <p>Responder a (" . $email . ")<p>
                            <p style='font-weight:bold;'>Mensaje:</p>" . $text
        );
        $mail->AddReplyTo($email, $name);
        $mail->SetFrom($adminEmail, $adminName);

        foreach ($adresses as $nameI => $emailI) {
            $mail->AddAddress($emailI, $nameI);
        }

        $mail->Send();
    }

}

?>
