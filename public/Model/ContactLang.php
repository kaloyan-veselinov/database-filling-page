<?php
switch (LANGCODE){
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


        break;
}
