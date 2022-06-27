<?php 

class Redirect{

    public static function  to($location){
        header("Location: ".URL."/"."$location");
        exit();
    }
}