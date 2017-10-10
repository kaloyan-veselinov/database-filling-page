<?php
require_once dirname(__FILE__).'/../View/View.php';
require_once dirname(__FILE__).'/../Model/ContactLang.php';
class ContactController
{
    function displayForm()
    {
        $view = new View('Contact.php');
        $view->generateView(array());
    }
}