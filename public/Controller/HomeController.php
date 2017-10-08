<?php
require_once dirname(__FILE__).'/../Model/HomeLang.php';
class HomeController
{
    public function displayForm(){
        $view = new View('Home.php');
        $view->generateView(array());
    }

}