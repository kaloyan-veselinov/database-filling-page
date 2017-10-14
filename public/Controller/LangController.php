<?php

class LangController
{
    public function __construct()
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if(!isset($_SESSION['preferred_lang'])) {
            if($lang!='fr' && $lang!='en' ){
                $lang = 'en';
            }
            $_SESSION['preferred_lang'] = $lang;
            echo "lang : $lang";
        }
    }
    function changeLang($lang){
        if($lang!='en' && $lang!='fr'){
            $lang = 'en';
        }
        $_SESSION['preferred_lang'] = $lang;
    }
}