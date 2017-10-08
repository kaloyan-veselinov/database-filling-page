<?php
require_once dirname(__FILE__).'/../Model/HomeLang.php';
class HomeController
{
        public function displayHomePage(){
                $view = new View('Home.php');
                $view->generateView(array('sections' => $this->generateSections()));
        }

        private function generateSections(){
                $sections = array();
                $main = $this->generateSection(
                        "main_section",
                        MAIN_TITLE,
                        MAIN_DESCRIPTION
                );
                $decentralized = $this->generateSection(
                        "decentralized",
                        DECENTRALIZED_TITLE,
                        DECENTRALIZED_DESCRIPTION
                );
                $_2FA = $this->generateSection(
                        "2FA",
                        _2FA_TITLE,
                        _2FA_DESCRIPTION
                );
                $passwordManager = $this->generateSection(
                        "password_manager",
                        PM_TITLE,
                        PM_DESCRIPTION
                );
                array_push($sections, $main);
                array_push($sections, $decentralized);
                array_push($sections, $_2FA);
                array_push($sections, $passwordManager);
                return $sections;
        }

        private function generateSection($id, $title, $description){
                return array(
                        "id" => $id,
                        "title" => $title,
                        "description" => $description
                );
        }
}
