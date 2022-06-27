<?php 

class Core {

    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->getUrl();

        // print_r($url); die(); // for debugging purpose  // $url is an array of strings 

        if(!empty($url[0]) && file_exists("../app/controller/".ucwords($url[0]).".php")){
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        require_once "../app/controller/".$this->currentController.".php";
        $this->currentController = new $this->currentController;

        if(isset($url[1])){
            if(method_exists($this->currentController,$url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url):[];

        // print_r(array_values($url)); die(); 
        // check the array values of $url of parameters / controllers and methods there values are unserted 
        
        call_user_func_array(
            [$this->currentController,$this->currentMethod],$this->params
        );
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
           return $url;
        }
    }
}

?>