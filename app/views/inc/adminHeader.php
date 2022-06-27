<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL ?>/css/css.css">

    <title><?php echo $data['title1'] ?></title>
    
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<div class="container">
      <a class="navbar-brand" href="<?php echo URL ?>/home" target='_blank'>Shopping Portal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          
          <?php 
          // new Session;
            if(!Session::existed('admin_name')){ ?>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL ?>/admins/login">SignIn</a>
                </li>
            <?php  }else{ ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php Session::get('admin_name') ?></a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?php echo URL ?>/admins/profile">Profile</a></li>
                    <li><a class="dropdown-item" href="<?php echo URL ?>/admins/logout">Logout</a></li>
                  </ul>
                </li>
            <?php  }
           ?>
        </ul>
        
      </div>
      </div>
    </nav>
