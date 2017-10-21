<?php
require_once dirname(__FILE__).'/../Controller/LangController.php';
$langController = new LangController();
switch ($_SESSION['preferred_lang']){
        case "fr" :
                define("TITLE","Woodpeckey - Votre gestionnaire de mot de passe personnel");
                define("LEGAL_TEXT","Mentions légales");
                define("CREDITS_TXT","Crédits");

            break;
        default :
                define("TITLE","Woodpeckey - Your own password manager");
                define("LEGAL_TEXT","Legal");
                define("CREDITS_TXT","Credits");

            break;
}
