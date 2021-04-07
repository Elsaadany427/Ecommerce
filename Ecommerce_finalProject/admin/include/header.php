<?php
 include "include/db.php" ; 
 ?>

<?php 
     if(isset($_GET['pro_id'])){
        $product_id = $_GET['pro_id'];
        //echo $product_id;
        $get_product = "SELECT * FROM product WHERE product_id ='$product_id'";
        $run_product = mysqli_query($conn , $get_product);
        $row_product = mysqli_fetch_array($run_product);
        $p_cat_id = $row_product['p_cat_id'];
        $product_title = $row_product['product_title'];
        $product_price = $row_product['product_price'];
        $product_desc  = $row_product['product_desc'];
        $product_img1 = $row_product['product_img1'];
        $product_img2 = $row_product['product_img2'];
        $product_img3 = $row_product['product_img3'];
        
        $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id'";
        $run_p_cat = mysqli_query($conn , $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
     }


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="styles/main.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">

</head>

<body>
    
    <!-- Main Top Menu  Register | Login | My Account |  Go To Cart  -->
    <div id="top">
        <!--Top main menu -->
        <div class="container">
            <!--container top-->

            <div class="col-md-6 offer">
                <!--col-md-6 offer top-->
                <a href="#"> <img src="imgs/egypt.png" alt=""> Egypt </a>
                <a href="#"> | <i class="fas fa-phone"></i> +9874536112 </a>
            </div>
            <!--End col-md-6 offer top-->

            <div class="col-md-6">
                <!--col-md-6 top-->
                <ul class="menu">
                    <!--menu top-->
                    <li> <a href="client_Register.php">Register</a> </li>
                    <li> <a href="checkout.php">Login</a> </li>
                    <li> <a href="client/my_account.php">My Account</a> </li>
                    <li> <a href="cart.php">Go To Cart</a> </li>
                </ul>
                <!--End menu top-->
            </div>
            <!--End col-md-6 top-->

        </div>
        <!--End container top-->
    </div>
    <!--End main menu -->


    <!--Navbar -->
    <div id="navbar" class="navbar navbar-default">
        <!--Navbar -->

        <div class="container">
            <!--Navber container top-->

            <div class="navbar-header">
                <!--Navber-header top-->
                <a href="index.php" class="navbar-brand home">
                    <!--Navber-brand top-->
                    <img src="imgs/logoe.png" alt="store logo">
                </a>
                <!--End Navber-brand-->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <!--Navber-button top-->
                    <span class="sr-only">
                        Toggle Navigation
                    </span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <!--End Navber-button-->


                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <!--Navber-button search -->
                    <span class="sr-only">
                        Toggle Search
                    </span>
                    <i class="fa fa-search"></i>
                </button>
                <!--End Navber-button search -->
            </div>
            <!--End Navber-header top-->


            <div class="navbar-collapse collapse" id="navigation">
                <!--Navber-collapse -->

                <div class="padding-nav">
                    <!--Padding Navber-collapse -->
                    <ul class="nav navbar-nav left">
                        <!--navber-nav left -->
                        <li class = "<?php if($active == 'Home') echo 'act'; ?>"" > <a href="index.php">Home</a> </li>
                        <li class = "<?php if($active == 'shop') echo 'act'; ?>"" > <a href="shop.php">Shop</a> </li>
                        <li class = "<?php if($active == 'account') echo 'act'; ?>"" > <a href="client/my_account.php">My Account</a> </li>
                        <li class = "<?php if($active == 'shopping') echo 'act'; ?>"" > <a href="cart.php">Shopping Cart</a> </li>
                        <li class = "<?php if($active == 'contact') echo 'act'; ?>"" > <a href="contact.php">Contact Us</a> </li>
                    </ul>
                    <!--End navber-nav left -->
                </div>
                <!--End Padding Navber-collapse -->

                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <!-- navbar-btn btn-primary right -->
                    <i class="fa fa-shopping-cart"></i>
                    <span> <?php include "./function/totalitemsandPrice.php";  echo $count_items ;?>  Items in Your Cart | Total Price : <?php include "./function/totalitemsandPrice.php"; echo "$" . $total ; ?></span>
                </a> <!-- End navbar-btn btn-primary right -->

                <div class="navbar-collapse collapse right">
                    <!-- navbar-collapse collapse right -->
                    <butten class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <!-- btn btn-primary navber-btn -->
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </butten> <!-- End btn btn-primary navber-btn -->
                </div> <!-- End navbar-collapse collapse right -->

                <div class="collapse clearfix" id="search">
                    <!-- collapse clearfix -->
                    <form method="get" action="results.php" class="navbar-form">
                        <!-- form -->
                        <div class="input-group">
                            <!-- Input-group -->
                            <input type="text" class="form-control" name="user_query" placeholder="Search" required> <!-- user-query -->
                            <span class="input-group-btn">
                                <!-- input-group-btn -->
                                <button type="submit" name="search" value="search" class="btn btn-primary">
                                    <!-- submit -->
                                    <i class="fa fa-search"></i>
                                </button> <!-- End submit -->
                            </span> <!-- End input-group-btn -->
                        </div> <!-- End Input-group -->
                    </form> <!-- End Form -->
                </div> <!-- End collapse clearfix -->
            </div>
            <!--End Navber-collapse -->
        </div>
        <!--End Navber container top-->
    </div>
    <!--End Navber-->

