<?php

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