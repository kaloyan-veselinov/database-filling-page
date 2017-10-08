<?php
require_once dirname(__FILE__).'/Lang.php';
switch (LANGCODE){
    case "en" :
        define("TITLE","Woodpeckey - Your own password manager");

        break;
    case "fr" :
        define("TITLE","Woodpeckey - Votre gestionnaire de mot de passe personnel");
        break;

}