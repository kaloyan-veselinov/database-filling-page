<?php
require_once dirname(__FILE__).'/Lang.php';
switch (LANGCODE){
    case "en" :
        define("USERNAME_TXT","Username");
        define("Password_TXT","Password");
        define("SUBMIT_TXT","Submit");
        define("PASSWORD_COUNTER_TXT_1","Please enter this password ");
        define("PASSWORD_COUNTER_TXT_2"," times");

        break;
    case "fr" :
        define("USERNAME_TXT","Nom d'utilisateur");
        define("Password_TXT","Mot de passe");
        define("SUBMIT_TXT","Envoyer");
        define("PASSWORD_COUNTER_TXT_1","Entrez ce mot de passe ");
        define("PASSWORD_COUNTER_TXT_2"," fois");
        break;

}