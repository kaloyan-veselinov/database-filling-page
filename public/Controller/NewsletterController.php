<?php

    require_once dirname('__FILE__').'/Model/NewsletterLang.php';
    require_once dirname('__FILE__').'/Model/NewsletterModel.php';
    class NewsletterController{
        private $model;
        function addSubscription(string $email, string $language){
            if (is_null($language) || ($language!="en" && $language!="fr")){
                $language = en;
            }
            $id = rand();
            if($this->validateInput($email)) {
                $this->model = new NewsletterModel();
                $this->model->addSubscription($email, $language,$id);
                $this->notify($email,$language,$id);
            }

        }

        function validateInput(string $email):bool {
            return filter_var($email,FILTER_VALIDATE_EMAIL);
        }

        function unsubscribe($subscriptionId){
            $this->model = new NewsletterModel();
            $this->model->unsubscribe($subscriptionId);
        }

        function notify($email,$language,$id){
            $lang = new NewsletterLang($language,$id);
            $to = $email;
            $subject = $lang->subject;
            $message = $lang->body;
            $headers = "From: newsletter@woodpeckey.com . \r\n" .
                "Reply-To:  . \r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
        }


}


