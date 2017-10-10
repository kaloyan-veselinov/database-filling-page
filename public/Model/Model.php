<?php
require_once dirname(__FILE__).'/../Controller/Logger.php';
class Model {
    private $connection;
    public function __construct(){
        $this->connection = new mysqli('db700516776.db.1and1.com', 'dbo700516776', 'q4#1Qc$6nD7gLGzy', 'db700516776');
        if ($this->connection->connect_error) {
            die(Logger::logError("Connection failed: " . $this->connection->connect_error));
        }
    }
    public function __destruct(){
        mysqli_close($this->connection);
        unset($this->connection);

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
                die(Logger::logError($this->connection->error));
            }
            $result = $prepared_statement->get_result();
        }
        else{
            die(Logger::logError($this->connection->error));
        }
        return $result;
    }
    private function getConnection(){
        return $this->connection;
    }

    private function redirectPrevPage(){
        if(isset($_SERVER['HTTP_REFERER'])){
            header('Location',$_SERVER['HTTP_REFERER'], true);

            exit();
        }else{
            header('Location','index.php', true);
            exit();
        }
    }
}
