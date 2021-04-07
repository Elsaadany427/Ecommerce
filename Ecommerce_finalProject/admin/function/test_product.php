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
    <div class="col-md-3 col-sm-6 proo">
            <div class="product-grid">
                <div class="product-image">
                    <a href = "details.php?pro_id=<?php echo $product_id ;?>">
                        <img class="pic-1" src = "Admin1/products/<?php echo $product_img1; ?>">
                        <img class="pic-2" src = "Admin1/products/<?php echo $product_img1; ?>">
                    </a>
                    <ul class="social">
                        <li><a href = "details.php?pro_id=<?php echo $product_id ;?>" data-tip="Details"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href = "cart.php?pro_id=<?php echo $product_id ;?>" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#"> <?php echo $product_title ;?></a></h3>
                    <div class="price">$ <?php echo $product_price ;?>
                       
                    </div>
                    <a class="add-to-cart" href = "cart.php?pro_id=<?php echo $product_id ;?>">+ Add To Cart</a>
                </div>
            </div>
        </div>
    <?php }

    ?>
