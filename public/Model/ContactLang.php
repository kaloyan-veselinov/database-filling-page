<?php

switch ($_SESSION['preferred_lang']){
    case "fr" :
        define("CONTACT_TITLE","Contactez nous");
        define("CONTACT_PRE", 'Pour nous contacter, veuillez remplir le formulaire
        suivant.');
        define("CONTACT_NAME","Nom");
        define("CONTACT_EMAIL","Email");
        define("CONTACT_MESSAGE","Message");
        define("CONTACT_SUBMIT","Envoyer");
        define("CONTACT_COUNTER","Caractères restants : ");
        define("CONTACT_SUBJECT","Sujet : ");
        define("CONTACT_SENT_MAIN","Votre message a été transmis");
        define("CONTACT_SENT","Nous vous répondrons dès que possible");


        break;
    default :
        define("CONTACT_TITLE","Contact us");
        define("CONTACT_PRE", 'To contact us, please fill the following form');
        define("CONTACT_NAME","Your name");
        define("CONTACT_EMAIL","Email");
        define("CONTACT_MESSAGE","Your Message");
        define("CONTACT_SUBMIT","Submit");
        define("CONTACT_COUNTER","Characters left : ");
        define("CONTACT_SUBJECT","Subject : ");
        define("CONTACT_SENT_MAIN","Your message has been sent");
        define("CONTACT_SENT","We'll come back to you as soon as possible.");


        break;
}
