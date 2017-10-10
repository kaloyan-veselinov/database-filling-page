<?php
require_once dirname(__FILE__).'/../Vendor/php/PHPMailer-6.0.1/src/PHPMailer.php';
require_once dirname(__FILE__).'/../Vendor/php/PHPMailer-6.0.1/src/Exception.php';
require_once dirname(__FILE__).'/../Vendor/php/PHPMailer-6.0.1/src/SMTP.php';

/**
 * Created by PhpStorm.
 * User: jules
 * Date: 10/10/17
 * Time: 22:19
 */

class ContactModel
{
    private $name;
    private $email;
    private $subject;
    private $msg;

    function __construct($name, $email, $subject, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->msg = $msg;
    }

    function sendEmail()
    {
        $mail = new \PHPMailer\PHPMailer\PHPMailer(null);

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'auth.smtp.1and1.fr';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'contact@woodpeckey.com';                 // SMTP username
        $mail->Password = '6qjB#v&x02SuRPNyLVm';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

        $mail->From = $this->email;
        $mail->FromName = $this->name;
        $mail->addAddress('contact@woodpeckey.com', $this->name);     // Add a recipient
        $mail->addReplyTo('contact@woodpeckey.com', $this->name);


        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->isHTML(false);                                  // Set email format to HTML

        $mail->Subject = $this->subject;
        $mail->Body = $this->msg;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }

    }
}