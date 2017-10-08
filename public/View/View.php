<?php
class View{
    private $file;
    public function __construct($file){
        $this->file = 'View/' . $file;
    }
    public function generateView(array $data){
        $content = $this->generateFile($this->file, $data);
        $view = $this->generateFile('View/Template.php', array('content'=>$content));
        echo $view;
    }
    private function generateFile(string $file, array $data){
        if (file_exists($file)){
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else{
            throw new Exception ("File '$file' not found!");
        }
    }
}