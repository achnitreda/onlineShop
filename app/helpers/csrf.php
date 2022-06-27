<?php 

class Csrf {

    public static function get(){
        if(empty($_SESSION['csrf'])){
            $_SESSION['csrf'] = bin2hex(random_bytes(35));
                   
        }
        return hash_hmac('sha256', 'string for protection of php form',$_SESSION['csrf']);
    }

    public static function CsrfToken(){
       
        if(isset($_POST['csrf'])){
            if(hash_equals(self::get(), $_POST['csrf'])){
                return true;
            }else {
                die('You can\'t');
            }
        }

        if(isset($_GET['csrf'])){
            if(hash_equals(self::get(), $_GET['csrf'])){
                return true;
            }else {
                die('You can\'t');
            }
        }
    }
}

// https://stackoverflow.com/questions/6287903/how-to-properly-add-cross-site-request-forgery-csrf-token-using-php
// https://www.phptutorial.net/php-tutorial/php-csrf/