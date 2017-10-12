<?php

class ContactModel
{
    private $name;
    private $email;
    private $subject;
    private $msg;

    function __construct($name, $email, $subject, $msg)
    {
        $this->name = htmlentities($name);
        $this->email = $email;
        $this->subject = htmlentities($subject);
        $this->msg = htmlentities($msg);
    }

    function sendEmail()
    {
        if($this->validateInput($this->email)) {
            $to = 'contact@woodpeckey.com';
            $subject = $this->subject;
            $message = $this->msg;
            $headers = "From: $this->email . \r\n" .
                "Reply-To: $this->email . \r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
        }
        $view = new View('ContactSent.php');
        $view->generateView(array());
    }

    function validateInput($email):bool {
        return filter_var($email,FILTER_VALIDATE_EMAIL);
    }
}