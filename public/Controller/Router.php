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
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function routeRequest(){
        if(isset($_POST['action'])){
            if($_POST['action']=="submit"){
                $this->data_receiver_controller->processData();
            }
        }
        else{
            $path = explode('/',$this->uri);
            if($path[sizeof($path)-1] == "help"){
                $this->form_cotroller->displayForm();
            }else if($path[sizeof($path)-1] == "home"){

                $this->home_controller->displayHomePage();

            }else if($path[sizeof($path)-1] == ""){
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
