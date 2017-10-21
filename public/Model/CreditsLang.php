<?php
switch ($_SESSION['preferred_lang']){
    case "fr" :
        define('CREDITS_TITLE','Crédits');
        define('CREDITS_BACK_LABEL','Image de fond : ');



        break;
    default :
        define('CREDITS_TITLE','Credits');
        define('CREDITS_BACK_LABEL','Background Image : ');

        break;
}
