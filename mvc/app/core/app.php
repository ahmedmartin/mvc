<?php

class app {

    public $controller = 'home';
    public $method = 'index';
    public $params = [];

    public function __construct(){

       $url = $this -> parseuri();
       // check if exist (url)
       if(isset($url)){
           // check if folder controller have file url[0] 
           if(file_exists('../app/controllers/'. $url[0].'.php')){
                $this -> controller = $url[0] ;
                unset($url[0]);
           }else
                echo'sorry we will call defult controller class'.'don\'t have url';
        }

        require_once('../app/controllers/'.$this -> controller.'.php');
        $this -> controller = new $this-> controller () ;

        
        if(isset($url[1]) && method_exists($this-> controller,$url[1])){
            $this -> method = $url[1];
            unset($url[1]);
        }

        $this -> params = $url ? array_values($url) : [] ;

        call_user_func_array([$this->controller , $this -> method],$this->params);
           
       
    }

    public function parseuri(){

        if(isset($_GET['url']))
           return   explode('/', $_GET['url']);
           
        else
           echo 'parse error';


    }
}