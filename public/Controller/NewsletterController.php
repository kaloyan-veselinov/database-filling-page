<?php


    require_once dirname('__FILE__').'/Model/NewsletterModel.php';
    class NewsletterController{
        private $model;
        function addSubscription(string $email, string $language){
            if (is_null($language) || ($language!="en" && $language!="fr")){
                $language = en;
            }
            $this->model = new NewsletterModel();
            $this->model->addSubscription($email,$language);
            $this->redirectPrevPage();
            echo "test";

        }


}


