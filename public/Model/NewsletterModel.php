<?php
class NewsletterModel extends Model
{
    /*
    private $connection;
    public function __construct(){
        $this->connection = new mysqli("192.168.33.10", "user", "password", "newsletter");
        if ($this->connection->connect_error) {
            die(Logger::logError("Connection failed: " . $this->connection->connect_error));
        }
    }
    public function __destruct(){
        mysqli_close($this->connection);
    }
*/
    public function addSubscription(string $email, string $language){
        $query = "INSERT INTO newsletter_subscription (email,language) VALUES (?,?);";
        $params_type = "ss";
        $params = array(&$email,&$language);
        $this->executeRequest($query,$params,$params_type);
    }
    /*

    public function executeRequest(string $sql, array $params = null, string $params_type = null){
        if($params == null && $params_type ==null){
            $result = $this->getConnection()->query($sql);
        }
        elseif($prepared_statement = $this->getConnection()->prepare($sql)){
            array_unshift($params, $params_type);
            var_dump($params);
            call_user_func_array(array($prepared_statement, 'bind_param'), $params);
            if(!$prepared_statement->execute()){
                die(Logger::logError($this->connection->error));
            }
        }
        else{
            die(Logger::logError($this->connection->error));
        }
    }
    */
}