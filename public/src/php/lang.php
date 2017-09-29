<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    // Setting default language to en
    if ($lang == ""){
        $lang = "en";
        $lang = "en";
    }else{
        $currentLang = $lang;
    }

    switch ($currentLang){
        case "en" :
            define("LANGCODE" , "en");
            break;

        case "fr" :
            define("LANGCODE" , "fr");
            break;

        default:
            define("LANGCODE", "en");
            break;
    }