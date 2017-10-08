<?php
require_once dirname(__FILE__).'/../Model/Model.php';
require_once dirname(__FILE__).'/../Model/EntryModel.php';
require_once dirname(__FILE__).'/../Model/FormLang.php';
require_once dirname(__FILE__).'/../View/View.php';
class FormController {
    private $entry_model;
    public function __construct(){
        $this->entry_model = new EntryModel();
    }
    public function displayForm(){
        $displayedPassword = $this->entry_model->getDisplayedPassword();
        $view = new View('Form.php');
        $view->generateView(array('displayedPassword' => $displayedPassword));
    }
}