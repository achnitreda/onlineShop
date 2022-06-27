<?php 
    require_once 'config/config.php';
    require_once 'helpers/session.php';
    require_once 'helpers/redirect.php';
    require_once 'helpers/auth.php';
    require_once 'helpers/csrf.php';
    require_once 'helpers/email.php';

    
    spl_autoload_register(function($class){
        require_once 'libs/'.$class.'.php';
    });

