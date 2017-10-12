<?php
require_once dirname(__FILE__).'/../Model/EntryModel.php';
require_once dirname(__FILE__).'/Logger.php';
class DataReceiverController{
    private $entry_model;
    public function processData(){
        $this->entry_model = new EntryModel();
        if(isset($_POST['data'])) {
            $entryData = $_POST['data'];
            foreach ($entryData as $entry) {
                $this->processEntry($entry);
            }
        }
    }
    function processEntry($entry){
        if($this->verifyToken($entry)) {
            $entryId = $this->entry_model->addEntryToDatabase($entry);
            $upEvents = $entry['keyUpEvents'];
            $downEvents = $entry['keyDownEvents'];
            if (is_int($entryId) && $entryId >= 0) {
                Logger::logEntry($entryId, true);
            } else {
                Logger::logEntry($entryId, false);
            }
            $this->entry_model->addKeyEventsToEntry($entryId, $downEvents, $upEvents);
        }
    }

    function verifyToken($entry):bool{
        $password = $entry['password'];
        if(!isset($password)){
            return false;
        }else{
            if(isset($_SESSION['password_token'])){
                $token_vales = $this->entry_model->retrieveToken($_SESSION['password_token']);
                $time_diff = time()-$token_vales['creationTime'];
                if($password == $token_vales['password'] && $time_diff>5 && $time_diff<5*3600){
                    return true;
                }else{
                    return false;
                }
            }
        }
    }
}