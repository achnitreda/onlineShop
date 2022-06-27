
<?php require_once ROOT ."/views/inc/header.php" ?> 
<div class=" my-4 mx-auto">
        <h3 class='text-center my-4'>Our Prouducts</h3>

        <div class="d-md-block d-lg-none w-50 mx-auto"">
        <form class="d-flex" action='<?php echo URL ?>/home/search' method='POST'>
              <input class="form-control me-2" type="search"  name='search' placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> 
        </div> 

    <?php require_once ROOT ."/views/inc/slider.php" ?>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <h5>Categories</h5>
                <ul class="list-unstyled">
                <?php 
                if($data['categories']){

                    foreach ($data['categories'] as $cat) {?>
                        <li><a href="<?php echo URL ?>/home/getProByCat/<?php echo $cat->cat_id ?>"><?php echo $cat->cat_name ?></a></li>
                    <?php }
                }else {?>
                        <p class="text-center text-danger"><span class='btn btn-sm btn-danger' style='border-radius:50%'><i class="fa fa-warning"></i></span> There is no categories</p>
                        <?php  }
                    ?>
                </ul>

                <h5>Brands</h5>
                <ul class="list-unstyled">
                <?php 
                if($data['manufactures']){

                    foreach ($data['manufactures'] as $man) {?>
                        <li><a href="<?php echo URL ?>/home/getProByMan/<?php echo $man->man_id ?>"><?php echo $man->man_name ?></a></li>
                    <?php }
                }else{?>
                    <p class="text-center text-danger"><span class='btn btn-sm btn-danger' style='border-radius:50%'><i class="fa fa-warning"></i></span> There is no Brands</p>
                    <?php  }
                ?>
                </ul>
                <hr class='bg-dark'>
            </div>
            
            <?php 
            if($data['products']){

                foreach ($data['products'] as $pro) {?>
                    <div class="col-lg-3 col-md-3 col-sm-6 my-2">
                        <div class="card position-relative" >
                            <span class="badge bg-success position-absolute p-1 "><?php echo $pro->price?>$</span>
                            <img style='height:200px' class="img-fluid" src="<?php echo URL ?>/uploads/<?php echo $pro->image ?>" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $pro->name ?></h6>
                                <a href="<?php echo URL ?>/home/show/<?php echo $pro->product_id ?>" class="text-white btn btn-info btn-sm py-1" style="font-size:13px">Details</a>
                                <a href="<?php echo URL ?>/carts/add/<?php echo $pro->product_id ?>/<?php echo $pro->price ?>" class="btn btn-danger btn-sm py-1 float-end" style="font-size:13px"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                <?php }
            }else {?>
                <p class="text-center text-danger"><span class='btn btn-sm btn-danger' style='border-radius:50%'><i class="fa fa-warning"></i></span> There is no Products</p>
                <?php  }
            ?>
        </div>
    </div>
<?php require_once ROOT ."/views/inc/footer.php" ?>