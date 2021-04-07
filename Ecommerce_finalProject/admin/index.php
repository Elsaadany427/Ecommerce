<?php
 
 include "include/header.php";
 
 ?>

    <!-- Header -->
    <div class="headerdiv">
        <!--headerdiv-->
        <header class="container">
            <!--Header container-->   

            <!--col-sm-4-->    
            <div class="col-sm-4">
                <div class="headerEcomm">
                    <!--headerEcomm-->
                    <h1>E-COMMERCE</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio architecto adipisci cumque dolorem repudiandae sint ratione temporibus eaque. Accusantium eveniet optio eligendi nulla laborum aliquam illo tenetur iusto perspiciatis minima!</p>
                    <input type="submit" class="btn">
                </div>
                <!--End headerEcomm-->
            </div>
            <!--End col-sm-4-->

            <!--col-sm-8-->
            <div class="col-sm-8">
                <img src="Admin1/images/20943715.jpg" alt="header">
            </div>
            <!--col-sm-8-->

        </header>
        <!--End Header container-->
    </div>
    <!--End headerdiv-->


    <!--Advantage-->
    <div id="advantage">
        <!--Advantage-->
        <div class="container">
            <!--Advantage container-->
            <div class="same-height-row">
                <!--same-height-row-->
                
                <!--col-sm-4-->
                <div class="col-sm-4">

                    <div class="box same-height">
                        <!--box same-height-->
                        <div class="icon">
                            <!--icon-->
                            <i class="fa fa-heart"></i>
                        </div>
                        <!--End icon-->
                        <h3> <a href="#"> Best Offer </a></h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <!--End box same-height-->
                </div>
                <!--End col-sm-4-->
                
                <!--col-sm-4-->
                <div class="col-sm-4">

                    <div class="box same-height">
                        <!--box same-height-->
                        <div class="icon">
                            <!--icon-->
                            <i class="fa fa-tag"></i>
                        </div>
                        <!--End icon-->
                        <h3> <a href="#"> Best Prices </a></h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <!--End box same-height-->
                </div>
                <!--End col-sm-4-->
                
                <!--col-sm-4-->
                <div class="col-sm-4">

                    <div class="box same-height">
                        <!--box same-height-->
                        <div class="icon">
                            <!--icon-->
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <!--End icon-->
                        <h3> <a href="#"> 100% Original</a></h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <!--End box same-height-->
                </div>
                <!--End col-sm-4-->

            </div>
            <!--End same-height-row-->
        </div>
        <!--End Advantage container-->
    </div>
    <!--End Advantage-->


    <!--services-->
    <div id="services">
        <div class="box">
            <!--box-->
            <div class="container">
                <!--container-->
                <div class="col-mid-12">
                    <!--col-mid-12-->
                    <h2>
                        Our Latest Products
                    </h2>
                </div>
                <!--End col-mid-12-->
            </div>
            <!--End container-->
        </div>
        <!--End box-->
    </div>
    <!--End services-->


    <!--Content-->
    <div id="content" class="container">
        <!--Row-->
        <div class="row indexRow">
           <?php include "function/get_product.php"; ?>
        </div>
        <!--End Row-->
    </div>
    <!--End Content-->


    <section class="offerman">
        <!-- Offer-->
        <div class="container">
            <!-- container-->
            <div class="col-sm-6">
                <!--col-sm-6-->
            </div>
            <!--End col-sm-6-->
            <div class="col-sm-6">
                <!--col-sm-6-->
                <div class="offer_right">
                    <!--offer_right-->
                    <h4>Offer for All men and women</h4>
                    <h1>50% OFF</h1>
                    <a href="details.php" class="btn btn-primary">
                        <i class="fa fa-shopping">
                            DISOVER NOW
                        </i>
                    </a>
                </div>
                <!--offer_right-->
            </div>
            <!--End col-sm-6-->
        </div>
        <!--End container-->
    </section>
    <!--End Offer-->


    <section class="NewProduct">
        <!-- NewProduct-->
        <div class="container">
            <!-- container-->
            <div class="col-mid-12">
                <!-- col-mid-12-->
                <h2>
                    new products
                    <hr>
                </h2>
            </div> <!-- End col-mid-12-->

            <div class="row RowInNewProduct">
                <!-- Row-->

                <div class="col-lg-6">
                    <!-- col-lg-6-->

                    <div class="new_productoffer">
                        <!-- new_productoffer-->

                        <h5 class="text-uppercase">collection of 2021</h5>
                        <h3 class="text-uppercase">Men’s t-shirt</h3>
                        <div class="product-img">
                            <img class="img-fluid img-responsive" src="Admin1/offers/offer1.webp" alt="Offer 1">
                        </div>
                        <h4>$120.70</h4>
                        <a href="details.php" class="btn btn-primary">Add to cart</a>
                    </div> <!-- End new_productoffer-->
                </div><!-- End col-lg-6-->

                <div class="col-lg-6">
                    <!-- col-lg-6-->
                    <div class="row">
                        <div class="col-lg-6 col-sm-4">
                            <!-- col-lg-6- col-md-6-->
                            <div class="single_product">
                                <!-- single_product-->
                                <div class="product-img">
                                    <!-- product-img-->
                                    <img class="img-fluid img-responsive" src="Admin1/offers/offer2.webp" alt="Offer 1">
                                </div><!-- End product-img-->

                                <div class="singleproductbtm">
                                    <!-- singleproductbtm-->
                                    <a href="details.php">
                                        <h4>Latest MEN'S SNEAKER</h4>
                                    </a>
                                    <div>
                                        <span>$25.55</span>
                                        <del>$29.22</del>
                                    </div>
                                </div> <!-- End singleproductbtm-->
                            </div><!-- End single_product-->
                        </div> <!-- End col-lg-6- col-md-6-->

                        <div class="col-lg-6 col-sm-4">
                            <!-- col-lg-6- col-md-6-->
                            <div class="single_product">
                                <!-- single_product-->
                                <div class="product-img">
                                    <!-- product-img-->
                                    <img class="img-fluid img-responsive" src="Admin1/offers/offer3.webp" alt="Offer 1">
                                </div><!-- End product-img-->

                                <div class="singleproductbtm">
                                    <!-- singleproductbtm-->
                                    <a href="details.php">
                                        <h4>Latest MEN'S SNEAKER</h4>
                                    </a>
                                    <div>
                                        <span>$25.55</span>
                                        <del>$29.22</del>
                                    </div>
                                </div> <!-- End singleproductbtm-->
                            </div><!-- End single_product-->
                        </div><!-- End col-lg-6- col-md-6-->

                        <div class="col-lg-6 col-sm-4">
                            <!--  col-lg-6- col-md-6-->
                            <div class="single_product">
                                <!-- single_product-->
                                <div class="product-img">
                                    <!-- product-img-->
                                    <img class="img-fluid img-responsive" src="Admin1/offers/offer4.webp" alt="Offer 1">
                                </div><!-- End product-img-->

                                <div class="singleproductbtm">
                                    <!-- singleproductbtm-->
                                    <a href="details.php">
                                        <h4>Latest MEN'S SNEAKER</h4>
                                    </a>
                                    <div>
                                        <span>$25.55</span>
                                        <del>$29.22</del>
                                    </div>
                                </div> <!-- End singleproductbtm-->
                            </div><!-- End single_product-->
                        </div><!-- End col-lg-6- col-md-6-->

                        <div class="col-lg-6 col-sm-4">
                            <!--  col-lg-6- col-md-6-->
                            <div class="single_product">
                                <!-- single_product-->
                                <div class="product-img">
                                    <!-- product-img-->
                                    <img class="img-fluid img-responsive" src="Admin1/offers/offer5.webp" alt="Offer 1">
                                </div><!-- End product-img-->

                                <div class="singleproductbtm">
                                    <!-- singleproductbtm-->
                                    <a href="details.php">
                                        <h4>Latest MEN'S SNEAKER</h4>
                                    </a>
                                    <div>
                                        <span>$25.55</span>
                                        <del>$29.22</del>
                                    </div>
                                </div> <!-- End singleproductbtm-->
                            </div><!-- End single_product-->
                        </div><!-- End col-lg-6- col-md-6-->
                    </div> <!-- End Row-->

                </div><!-- End col-lg-6-->

            </div> <!-- End Row-->

        </div> <!-- End container-->
    </section> <!-- End NewProduct-->

    <?php include "include/footer.php" ?>
