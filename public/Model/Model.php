<?php
require_once dirname(__FILE__).'/../Controller/Logger.php';
class Model {
    private $connection;
    public function __construct(){
        $this->connection = new mysqli("localhost", "root", "root", "scotchbox");
        if ($this->connection->connect_error) {
            die(Logger::logError("Connection failed: " . $this->connection->connect_error));
        }
    }
    public function __destruct(){
        mysqli_close($this->connection);
    }
    public function executeRequest(string $sql, array $params = null, string $params_type = null){
        if($params == null && $params_type ==null){
            $result = $this->getConnection()->query($sql);
        }
        elseif($prepared_statement = $this->getConnection()->prepare($sql)){
            array_unshift($params, $params_type);
            var_dump($params);
            call_user_func_array(array($prepared_statement, 'bind_param'), $params);
            if(!$prepared_statement->execute()){
                Logger::logError($this->connection->error);
            }
            $result = $prepared_statement->get_result();
        }
        else{
            Logger::logError($this->connection->error);
            return -1;
        }
        return $result;
    }
    private function getConnection(){
        return $this->connection;
    }
}