<?php
/**
 * Created by PhpStorm.
 * User: jules
 * Date: 08/10/17
 * Time: 19:39
 */

class NewsletterModel
{
    private $connection;
    public function __construct(){
        $this->connection = new mysqli("192.168.33.10", "user", "password", "scotchbox");
        if ($this->connection->connect_error) {
            die(Logger::logError("Connection failed: " . $this->connection->connect_error));
        }
    }
    public function __destruct(){
        mysqli_close($this->connection);
    }

    public function addSubscription(string $email, string $language){
        $query = "INSERT INTO newletter_subscription (email,language) VALUES (?,?);";
        $param_type = "ss";
        $params = array(&$email,&$language);
    }

}