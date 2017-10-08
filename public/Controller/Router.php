<?php

require_once dirname(__FILE__).'/FormController.php';
require_once dirname(__FILE__).'/DataReceiverController.php';
require_once dirname(__FILE__).'/HomeController.php';

class Router {
    private $form_cotroller;
    private $data_receiver_controller;
    private $home_controller;
    private $uri;

    public function __construct(){
        $this->form_cotroller = new FormController();
        $this->data_receiver_controller = new DataReceiverController();
        $this->home_controller = new HomeController();
        $this->uri = $_SERVER['PHP_SELF'];
    }

    public function routeRequest(){
        if(isset($_POST['action'])){
            if($_POST['action']=="submit"){
                $this->data_receiver_controller->processData();
            }
        }
        else{
            $path = explode('/',$this->uri);
            if(isset($path[2])){
                if ($path[2] == 'help'){
                    if(sizeof($path) == 3){
                        $this->form_cotroller->displayForm();
                    }
                }else if($path[2] == "home"){
                    if(sizeof($path) == 3) {
                        $this->home_controller->displayHomePage();
                    }
                }else if($path[2] == ""){
                    $this->home_controller->displayHomePage();
                }
            }else {
                $this->home_controller->displayHomePage();
            }
        }
    }
}
