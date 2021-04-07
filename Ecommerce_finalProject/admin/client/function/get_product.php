<?php
include '../include/db.php';

$get_orosucts = 'SELECT * FROM product order by 1 DESC LIMIT 0,8';
$run_products = mysqli_query( $conn, $get_orosucts );
while ( $row_products = mysqli_fetch_array( $run_products ) ) {
    $product_id = $row_products['product_id'];
    $product_title = $row_products['product_title'];
    $product_img1 = $row_products['product_img1'];
    $product_price = $row_products['product_price'];
    $product_desc = $row_products['product_desc'];

    ?>
    <!--End col-sm-4 col-sm-6 single-->
    <div class = 'col-sm-4 col-sm-6 single'>
    <!--col-sm-4 col-sm-6 single-->
        <div class = 'product'>
        <!--Product-->
        <a href = "details.php?pro_id=<?php echo $product_id ;?>">
            <img class = 'img-responsive' src = "Admin1/products/<?php echo $product_img1; ?>" alt = 'product 1'>
        </a>
    </div>

        <!--End product-->

        <div class = 'p_icon hidden-xs'>
            <!--p_icons-->
            <a href = '#'> <i class = 'fa fa-eye'></i> </a>
            <a href = '#'> <i class = 'fa fa-heart'></i> </a>
            <a href = '#'> <i class = 'fa fa-shopping-cart'></i> </a>
        </div>
        <!--End p_icons-->


        <div class = 'text'>
        <!--text-->
        <h3>
            <a href = "details.php?pro_id=<?php echo $product_id ;?>">
            <?php echo $product_title ;
            ?>
            </a>
        </h3>

        <p class = 'price'>$ <?php echo $product_price ;
        ?></p>
        <p class = 'button'>
        <a href = 'details.php?pro_id=<?php echo $product_id ;?>' class = 'btn btn-default'>
        View Details
        </a>
        <a href = "cart.php?pro_id=<?php echo $product_id ;?>" class = 'btn btn-primary'>
        <i class = 'fa fa-shopping'>
        Add To Cart
        </i>
        </a>
        </p>
        </div>
        <!--End Text-->
 

    </div>
    <!--End col-sm-4 col-sm-6 single-->

    <?php }

    ?>