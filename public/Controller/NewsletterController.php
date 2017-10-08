<?php

    function addSubscription(string $email, string $language){
        if (is_null($language) || ($language!="en" && $language!="fr")){
            $language = en;
        }

    }

