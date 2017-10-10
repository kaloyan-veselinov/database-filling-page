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
        $to      = 'contact@woodpeckey.com';
        $subject = $this->subject;
        $message = $this->msg;
        $headers = "From: $this->email . \r\n" .
            "Reply-To: $this->email . \r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

    }
}