<?php
include '../include/db.php';

// if the client not choose product category or category (default)
if (!(isset($_GET['p_cat_id']))) {
    if (!(isset($_GET['cat_id']))) {
        $per_page = 6;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $start_from = ($page - 1) * $per_page;

        $get_orosucts = "SELECT * FROM product order by 1 DESC LIMIT $start_from,$per_page";
        $run_products = mysqli_query($conn, $get_orosucts);
        while ($row_products = mysqli_fetch_array($run_products)) {
            $product_id = $row_products['product_id'];
            $product_title = $row_products['product_title'];
            $product_img1 = $row_products['product_img1'];
            $product_price = $row_products['product_price'];
            $product_desc = $row_products['product_desc'];

    ?>

            <div class='col-lg-4 col-sm-6 center-responsive single singleInshop'>
                <!--col-md-4 col-sm-6 center-responsive-->
                <div class='product'>
                    <!--Product-->
                    <a href='details.php?pro_id=<?php echo $product_id; ?>'>
                        <img class='img-responsive' src='Admin1/products/<?php echo $product_img1; ?>' alt='product 1'>
                    </a>
                    </div>
                <!--End product-->


                <div class='p_icon hidden-xs p_iconInShop'>
                    <!--p_icons-->
                    <a href='#'> <i class='fa fa-eye'></i> </a>
                    <a href='#'> <i class='fa fa-heart'></i> </a>
                    <a href='#'> <i class='fa fa-shopping-cart'></i> </a>
                </div>
                <!--End p_icons-->


                    <div class='text'>
                        <!--text-->
                        <h3>
                            <a href='details.php?pro_id=<?php echo $product_id; ?>'>
                                <?php echo $product_title;
                                ?>
                            </a>
                        </h3>

                        <p class='price'>$ <?php echo $product_price;
                                            ?></p>
                        <p class='button'>
                            <a href='details.php?pro_id=<?php echo $product_id; ?>' class='btn btn-default'>
                                View Details
                            </a>
                            <a href='cart.php?pro_id=<?php echo $product_id; ?>' class='btn btn-primary'>
                                <i class='fa fa-shopping'>
                                    Add To Cart
                                </i>
                            </a>
                        </p>
                    </div>
                    <!--End Text-->
                
            </div>
            <!--End col-md-4 col-sm-6 center-responsive-->

            <?php

        }
    }
}


// if the client choose product category or category


    // if the client choose product category
     if (isset($_GET['p_cat_id'])) {
        $p_cat_id = $_GET['p_cat_id'];
        $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id' ";
        $run_p_cat = mysqli_query($conn, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        $get_products = "SELECT * FROM product WHERE p_cat_id = '$p_cat_id' LIMIT 0,6";
        $run_products = mysqli_query($conn, $get_products);
        $count = mysqli_num_rows($run_products);

        echo "
        <div class='box'>
            <h1>$p_cat_title</h1>
            <p>$p_cat_desc</p>
        </div>
        ";

        if ($count == 0) {
            echo "
            <div class='box'>
                <h1>No Product Found In This Product Categories </h1>
            </div> ";
        } else {

            while ($row_products = mysqli_fetch_array($run_products)) {
                $product_id = $row_products['product_id'];
                $product_title = $row_products['product_title'];
                $product_img1 = $row_products['product_img1'];
                $product_price = $row_products['product_price'];
                $product_desc = $row_products['product_desc'];

            ?>

                <div class='col-lg-4 col-sm-6 center-responsive single singleInshop'>
                    <!--col-md-4 col-sm-6 center-responsive-->
                    <div class='product'>
                        <!--Product-->
                        <a href='details.php?pro_id=<?php echo $product_id; ?>'>
                            <img class='img-responsive' src='Admin1/products/<?php echo $product_img1; ?>' alt='product 1'>
                        </a>
                    </div>
                    <!--End product-->

                    <div class='p_icon hidden-xs p_iconInShop '>
                        <!--p_icons-->
                        <a href='#'> <i class='fa fa-eye'></i> </a>
                        <a href='#'> <i class='fa fa-heart'></i> </a>
                        <a href='#'> <i class='fa fa-shopping-cart'></i> </a>
                    </div>
                    <!--End p_icons-->


                        <div class='text'>
                            <!--text-->
                            <h3>
                                <a href='details.php?pro_id=<?php echo $product_id; ?>'>
                                    <?php echo $product_title;
                                    ?>
                                </a>
                            </h3>

                            <p class='price'>$ <?php echo $product_price;
                                                ?></p>
                            <p class='button'>
                                <a href='details.php?pro_id=<?php echo $product_id; ?>' class='btn btn-default'>
                                    View Details
                                </a>
                                <a href='cart.php?pro_id=<?php echo $product_id; ?>' class='btn btn-primary'>
                                    <i class='fa fa-shopping'>
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                        </div>
                        <!--End Text-->
                    

                   
                </div>
                <!--End col-md-4 col-sm-6 center-responsive-->



        <?php

            }
        }
     }




     // if the client choose  category
      else if (isset($_GET['cat_id'])) {      
        $cat_id = $_GET['cat_id'];
        $get_cat_id = "SELECT * FROM category WHERE cat_id = '$cat_id'";
        $run_cat_id = mysqli_query($conn, $get_cat_id);
        $row_cat_id = mysqli_fetch_array($run_cat_id);
        $cat_title = $row_cat_id['cat_title'];
        $cat_desc = $row_cat_id['cat_desc'];
        $get_cat = "SELECT * FROM product WHERE cat_id = '$cat_id'";
        $run_cat = mysqli_query($conn, $get_cat);
        $count = mysqli_num_rows($run_cat);

        echo"
        <div class='box'>
            <h1>$cat_title</h1>
            <p>$cat_desc</p>
        </div>
        ";

        if ($count == 0) {
            echo "
            <div class='box'>
                <h1>No Product Found In This Product Categories </h1>
            </div> ";
        } else {

            while ($row_cat = mysqli_fetch_array($run_cat)) {
                $product_id = $row_cat['product_id'];
                $product_title = $row_cat['product_title'];
                $product_img1 = $row_cat['product_img1'];
                $product_price = $row_cat['product_price'];
                $product_desc = $row_cat['product_desc'];

            ?>

                <div class='col-lg-4 col-sm-6 center-responsive single singleInshop'>
                    <!--col-md-4 col-sm-6 center-responsive-->
                    <div class='product'>
                        <!--Product-->
                        <a href='details.php?pro_id=<?php echo $product_id; ?>'>
                            <img class='img-responsive' src='Admin1/products/<?php echo $product_img1; ?>' alt='product 1'>
                        </a>
                        </div>
                    <!--End product-->

                    <div class='p_icon hidden-xs p_iconInShop'>
                        <!--p_icons-->
                        <a href='#'> <i class='fa fa-eye'></i> </a>
                        <a href='#'> <i class='fa fa-heart'></i> </a>
                        <a href='#'> <i class='fa fa-shopping-cart'></i> </a>
                    </div>
                    <!--End p_icons-->

                        <div class='text'>
                            <!--text-->
                            <h3>
                                <a href='details.php?pro_id=<?php echo $product_id; ?>'>
                                    <?php echo $product_title;
                                    ?>
                                </a>
                            </h3>

                            <p class='price'>$ <?php echo $product_price;
                                                ?></p>
                            <p class='button'>
                                <a href='details.php?pro_id=<?php echo $product_id; ?>' class='btn btn-default'>
                                    View Details
                                </a>
                                <a href='cart.php?pro_id=<?php echo $product_id; ?>' class='btn btn-primary'>
                                    <i class='fa fa-shopping'>
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                        </div>
                        <!--End Text-->
                   

                   

                </div>
                <!--End col-md-4 col-sm-6 center-responsive-->



    <?php

            }
        }
    }


