<?php
class NewsletterModel extends Model
{
    public function addSubscription($email,$language, $id){
        $query = "INSERT INTO newsletter_subscription (email,language,subscriptionId) VALUES (?,?,?);";
        $params_type = "ssi";
        $params = array(&$email,&$language,&$id);
        $this->executeRequest($query,$params,$params_type);
    }

    public function unsubscribe($id){
        $query = "DELETE FROM newsletter_subscription WHERE subscriptionId = ?;";
        $params_type = "i";
        $params = array(&$id);
        $this->executeRequest($query,$params,$params_type);
    }

}