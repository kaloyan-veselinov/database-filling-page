<?php
require_once dirname(__FILE__).'/../Controller/LangController.php';
$langController = new LangController();

switch ($_SESSION['preferred_lang']){
        case "fr" :
                define("USERNAME_TXT","Nom d'utilisateur");
                define("Password_TXT","Mot de passe");
                define("SUBMIT_TXT","Envoyer");
                define("PASSWORD_COUNTER_TXT_1","Entrez ce mot de passe ");
                define("PASSWORD_COUNTER_TXT_2"," fois");
                define("SUCCESS_TXT","Bravo! En voici un autre.");
                break;
        default :
                define("USERNAME_TXT","Username");
                define("Password_TXT","Password");
                define("SUBMIT_TXT","Submit");
                define("PASSWORD_COUNTER_TXT_1","Please enter this password ");
                define("PASSWORD_COUNTER_TXT_2"," times");
            define("SUCCESS_TXT","Well done! Here is another one.");

                break;
}
