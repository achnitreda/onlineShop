<?php 

class Controller {
    public function model($model){  // this->model(''); 
        require_once "../app/models/".$model.".php"; 
        return  new $model();
    }


    public function view($view,$data=[]){
        if(file_exists('../app/views/'.str_replace('.','/',$view).'.php')){
            require_once "../app/views/".str_replace('.','/',$view).".php";

            // echo str_replace('.','/',$view); die();
             // i think in array relplace . with / example:  $this->view('pages.contact', $data);
             // why ?   pages.contact.php   pages/contact.php   pages/contact   
             
        }else { 
        die('View does not exist');
        }
    }
}