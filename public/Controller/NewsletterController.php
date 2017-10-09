<?php
    require_once dirname('__FILE__').'/Model/NewsletterModel.php';
    function addSubscription(string $email, string $language){
        if (is_null($language) || ($language!="en" && $language!="fr")){
            $language = en;
        }
        $model = new NewsletterModel();
        $model.addSubscription($email,$language);

    }

