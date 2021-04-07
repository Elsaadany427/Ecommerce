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

    <div id="top">  <!--Top main menu -->
        <div class="container">  <!--container top-->

            <div class="col-md-6 offer"> <!--col-md-6 offer top-->
                <a href="#"> <img src="imgs/egypt.png" alt=""> Egypt </a>
                <a href="#"> | <i class="fas fa-phone"></i> +9874536112 </a>
            </div>   <!--End col-md-6 offer top-->

             <div class="col-md-6"> <!--col-md-6 top-->
                <ul class="menu">  <!--menu top-->
                    <li> <a href="../client_Register.php">Register</a> </li>
                    <li> <a href="../checkout.php">Login</a> </li>
                    <li> <a href="my_account.php">My Account</a> </li>
                    <li> <a href="../cart.php">Go To Cart</a> </li>
                </ul> <!--End menu top-->
             </div> <!--End col-md-6 top-->

        </div> <!--End container top-->
    </div> <!--End main menu -->

    <div id="navbar" class="navbar navbar-default"> <!--Navbar -->

        <div class="container"> <!--Navber container top-->

            <div class="navbar-header"> <!--Navber-header top-->
                <a href="index.php" class="navbar-brand home"> <!--Navber-brand top-->
                    <img src="imgs/logoe.png" alt="store logo">
                </a> <!--End Navber-brand-->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation"> <!--Navber-button top-->
                    <span class="sr-only">
                        Toggle Navigation
                    </span>
                    <i class="fa fa-align-justify"></i>
                </button> <!--End Navber-button-->


                <button class="navbar-toggle" data-toggle="collapse" data-target="#search"> <!--Navber-button search -->
                    <span class="sr-only">
                        Toggle Search
                    </span>
                    <i class="fa fa-search"></i>
                </button>  <!--End Navber-button search -->
            </div> <!--End Navber-header top-->


            <div class="navbar-collapse collapse" id="navigation"> <!--Navber-collapse -->

                <div class="padding-nav"> <!--Padding Navber-collapse -->
                    <ul class="nav navbar-nav left"> <!--navber-nav left -->
                        <li> <a href="../index.php">Home</a> </li>
                        <li> <a href="../shop.php">Shop</a> </li>
                        <li class="act"> <a href="client/my_account.php">My Account</a> </li>
                        <li> <a href="../cart.php">Shopping Cart</a> </li>
                        <li> <a href="../contact.php">Contact Us</a> </li>
                    </ul> <!--End navber-nav left -->
                </div> <!--End Padding Navber-collapse -->

                <a href="cart.php" class="btn navbar-btn btn-primary right"> <!-- navbar-btn btn-primary right -->
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items in Your Cart</span>
                </a> <!-- End navbar-btn btn-primary right -->

                <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right -->
                    <butten class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search" > <!-- btn btn-primary navber-btn -->
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </butten> <!-- End btn btn-primary navber-btn -->
                </div> <!-- End navbar-collapse collapse right -->

                <div class="collapse clearfix" id="search"> <!-- collapse clearfix -->
                    <form method ="get" action="results.php" class="navbar-form"> <!-- form -->
                        <div class="input-group"> <!-- Input-group -->
                            <input type="text" class="form-control" name="user_query" placeholder="Search" required> <!-- user-query -->
                            <span class="input-group-btn"> <!-- input-group-btn -->
                                <button type="submit" name="search" value ="search" class="btn btn-primary"> <!-- submit -->
                                    <i class="fa fa-search"></i>
                                </button> <!-- End submit -->
                            </span> <!-- End input-group-btn -->
                        </div> <!-- End Input-group -->
                    </form> <!-- End Form -->
                </div> <!-- End collapse clearfix -->
            </div> <!--End Navber-collapse -->
        </div> <!--End Navber container top-->
    </div> <!--End Navber-->

    <div id="Product_content"> <!--contant-->
        <div class="container"> <!--container-->
            <div class="col-md-12"><!--col-md-12-->
                <ul class="breadcrumb"> <!--UL-->
                    <li> <!--li-->
                        <a href="index.php">Home</a>
                    </li> <!--End li-->
                    <li>
                        My Account
                    </li>
                </ul> <!--End UL-->
            </div><!--End col-md-12-->
            <div class="col-md-3"> <!--col-md-3-->
                <?php include "include/sidebar.php"?>
            </div> <!--End col-md-3-->

            <div class="col-md-9"> <!-- col-md-9-->
                    <div class="box"> <!--Box-->
                        <h1 align = "center">Please Confirm Yor Payment</h1>
                        <form action="confirm.php" method="post" enctype="multipart/form-data" > <!--Form-->
                                <div class="form-group"> <!--Form-group-->
                                    <label>Invoice No: </label>
                                        <input type="text" class="form-control" name="invoice_no" required>
                                </div> <!--End Form-group-->
                                <div class="form-group"> <!--Form-group-->
                                    <label>Amount Sent: </label>
                                        <input type="text" class="form-control" name="amount_sent" required>
                                </div> <!--End Form-group-->
                                <div class="form-group"> <!--Form-group-->
                                    <label>Select Payment Method: </label>
                                    <select name="select_payment_mode" class="form-control"> <!--select-->

                                        <option> Select Payment Mode </option>
                                        <option> Back Code </option>
                                        <option> UBL / Omni Paisa </option>
                                        <option> Wasy Paisa </option>
                                        <option> Western Union </option>
                                    </select><!--End select-->
                                </div> <!--End Form-group-->
                                <div class="form-group"> <!--Form-group-->
                                    <label>Transaction / Reference ID: </label>
                                        <input type="text" class="form-control" name="ref_no" required>
                                </div> <!--End Form-group-->
                                <div class="form-group"> <!--Form-group-->
                                        <label>Omni Paisa / East Paisa: </label>
                                        <input type="text" class="form-control" name="code" required>
                                </div> <!--End Form-group-->
                                <div class="form-group"> <!--Form-group-->
                                        <label>Payment Date : </label>
                                        <input type="text" class="form-control" name="date" required>
                                </div> <!--End Form-group-->
                                <div class="text-center"> <!--Text center-->
                                    <button class="btn btn-primary btn-lg">
                                        <i class="fa fa-user-md"></i> Confirm Payment

                                    </button>
                                </div> <!--End text center-->

                        </form> <!--End Form-->
                    </div> <!--End Box-->
            </div> <!--End col-md-9-->

            </div> <!--End container-->
    </div> <!--End content-->
    <?php include "include/footer.php"?>
        