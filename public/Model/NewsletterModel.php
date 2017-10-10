<?php
class NewsletterModel extends Model
{
    public function addSubscription($email,$language){
        $query = "INSERT INTO newsletter_subscription (email,language) VALUES (?,?);";
        $params_type = "ss";
        $params = array(&$email,&$language);
        $this->executeRequest($query,$params,$params_type);
            echo "done";

    }

}