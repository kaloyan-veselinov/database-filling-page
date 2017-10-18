<?php
switch ($_SESSION['preferred_lang']){
    case "fr" :
        define('LEGAL_TITLE','Mentions Légales');
        define('HOST_TITLE', 'Hébergeur');
        define('HOST_NAME', '1&1 Internet SARL ');
        define('HOST_ADDRESS', '7, place de la Gare <br/>BP  70109<br/> 57201 Sarreguemines Cedex  ');



        break;
    default :
        define('LEGAL_TITLE','Legal Notices');
        define('HOST_TITLE', 'Host');
        define('HOST_NAME', '1&1 Internet SARL ');
        define('HOST_ADDRESS', '7, place de la Gare <br/>BP  70109<br/> 57201 Sarreguemines Cedex  ');


        break;
}