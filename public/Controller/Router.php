<?php

require_once dirname(__FILE__).'/FormController.php';
require_once dirname(__FILE__).'/DataReceiverController.php';
require_once dirname(__FILE__).'/HomeController.php';
require_once dirname(__FILE__).'/NewsletterController.php';
require_once dirname(__FILE__).'/ContactController.php';
require_once dirname(__FILE__).'/LangController.php';

require_once dirname(__FILE__).'/../Model/ContactModel.php';

class Router {
    private $form_controller;
    private $data_receiver_controller;
    private $home_controller;
    private $newsletter_controller;
    private $contact_controller;
    private $langController;
    private $uri;

    public function __construct(){
        $this->home_controller = new HomeController();
        $this->uri = $_SERVER['REQUEST_URI'];
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->langController = new LangController();

    }

    public function routeRequest(){
        if(isset($_POST['action'])) {
            if ($_POST['action'] == "submit") {
                $this->data_receiver_controller = new DataReceiverController();
                $this->data_receiver_controller->processData();
            }
        }
        else{
            $path = explode('/',$this->uri);
            if($path[1] == "help") {
                $this->form_controller = new FormController();
                $this->form_controller->displayForm();
            }else if($path[1] == "password"){
                $this->form_controller = new FormController();
                $this->form_controller->getPassword();
            }else if($path[1] == "home"){

                $this->home_controller->displayHomePage();
            }else if($path[1] == "newsletter"){
                $this->newsletter_controller = new NewsletterController();
                if (sizeof($path)>2){
                    if($path[2] == "unsubscribe"){
                        $this->newsletter_controller->unsubscribe($path[3]);
                    }
                }
                if(isset($_POST['email']) && isset($_POST['language'])){
                    $this->newsletter_controller->addSubscription(htmlspecialchars($_POST['email']),htmlspecialchars($_POST['language']));
                }

            }else if($path[1] == "contact"){
                if(isset($_POST['name']) && isset($_POST['email'])
                    && isset($_POST['subject']) && isset($_POST['msg'])){
                    $contact_model = new ContactModel($_POST['name'],
                        $_POST['email'],$_POST['subject'],$_POST['msg']);
                    $contact_model->sendEmail();
                }else {
                    $this->contact_controller = new ContactController();
                    $this->contact_controller->displayForm();
                }
            }else if($path[1] == "lang"){
                if(isset($_POST['lang'])){
                    $this->langController->changeLang($_POST['lang']);
                }
            }else if($path[1] == "legal"){
                $view = new View('Legal.php');
                $view->generateView(array());

            }else if($path[1] == ""){
                if($path[sizeof($path)-2] ==$path[1] ){
                    $this->home_controller->displayHomePage();
                }else{
                    echo $this->uri;
                }
            }else {
                $this->home_controller->displayHomePage();
            }
        }
    }


}
