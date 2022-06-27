
<nav class="navbar navbar-expand-sm navbar-light bg-light">
<div class="container ">
      <a class="navbar-brand" href="<?php echo URL ?>/admins/dashboard">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedConten" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedConten">
        <ul class="navbar-nav mr-auto">
          
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo URL ?>/categories">All Categories</a>
                    <a class="dropdown-item" href="<?php echo URL ?>/categories/add">Add Category</a>
                </ul>
            </li>
            <!-- manufature -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manufacture</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo URL ?>/manufactures">All Manufacture</a>
                    <a class="dropdown-item" href="<?php echo URL ?>/manufactures/add">Add Manufacture</a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo URL ?>/products">All Products</a>
                    <a class="dropdown-item" href="<?php echo URL ?>/products/add">Add Product</a>
                </ul>
            </li>
            

            <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL ?>/orders">Orders</a>
                </li>
    
        </ul>
      </div>
      </div>
    </nav>
    <div class="container all">

    <?php require_once ROOT ."/views/inc/messages.php" ?>
