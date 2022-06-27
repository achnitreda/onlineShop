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

<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
<div class="container">
      <a class="navbar-brand" href="<?php echo URL ?>/home">Shopping Portal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php 
            if(!Session::existed('user_id')){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL ?>/users/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL ?>/users/login">Login</a>
                </li>
            <?php  }else{ 
              ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL ?>/carts">
                      Cart<i class="fa fa-cart-shopping"></i><span class="badge bg-danger ml-0" style='border-radius:50%'>
                        <?php Session::get('user_cart')?>
                      </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL ?>/carts/orders">My Orders</a>
                </li>
                <li class="nav-item dropdown user">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php Session::get('user_name')?> <img style='height:30px;width:30px;border-radius:50%' src="<?php echo URL . '/uploads/'?>/<?php echo Session::get('user_img') ?>" alt=""></a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?php echo URL ?>/users/profile">Profile</a></li>
                    <li><a class="dropdown-item" href="<?php echo URL ?>/users/logout">Logout</a></li>
                  </ul>
                </li>
            <?php  }

            if(Session::existed('email')){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL ?>/users/confirm">Confirm</a>
                </li>
                
            <?php  }
            ?>
            <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo URL ?>/pages/contact">Contact Us</a>
        </li>
        </ul>
        <div style="margin: auto; margin-right: inherit;" class="d-none d-lg-block">
        <form class="d-flex" action='<?php echo URL ?>/home/search' method='POST'>
              <input class="form-control me-2" type="search"  name='search' placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> 
        </div>
      </div>
      </div>
    </nav>
    <div class="container all">
    <?php require_once ROOT ."/views/inc/messages.php" ?>