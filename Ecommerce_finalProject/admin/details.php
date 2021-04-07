<?php include 'include/header.php';
?>

<div id='content'>
    <!--contant-->

    <div class='container'>
        <!--container-->

        <div class='col-md-12'>
            <!--col-md-12-->
            <ul class='breadcrumb'>
                <!--UL-->
                <li>
                    <!--li-->
                    <a href='index.php'>Home</a>
                </li>
                <!--End li-->
                <li>
                    Details
                </li>
                <li>
                    <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title;
                                                                        ?></a>
                </li>
                <li><?php echo $product_title;
                    ?></li>
            </ul>
            <!--End UL-->
        </div>
        <!--End col-md-12-->

        <div class='col-md-3'>
            <!--col-md-3-->
            <?php include 'include/sidebar.php' ?>
        </div>
        <!--End col-md-3-->

        <div class='col-md-9'>
            <!--col-md-9-->

            <div id='prouductMain' class='row'>
                <!--productMain-->

                <!-- Carousel Image -->
                <div class='col-sm-6'>
                    <!--col-md-6-->

                    <div id='mainImage'>
                        <!--mainImage-->
                        <div id='mycarousel' class='carousel slide' data-ride='carousel'>
                            <!--carousel slide-->
                            <ol class='carousel-indicators'>
                                <!--carousel-indecators-->
                                <li data-target='#mycarousel' data-slide-to='0' class='active'></li>
                                <li data-target='#mycarousel' data-slide-to='1'></li>
                                <li data-target='#mycarousel' data-slide-to='2'></li>
                            </ol>
                            <!--End carousel-indecators-->
                            <div class='carousel-inner'>
                                <!--carousel-inner-->
                                <div class='item active'>
                                    <center><img class='img-responsive' src="Admin1/products/<?php echo $product_img1; ?>" alt='Product 1'></center>
                                </div>
                                <div class='item'>
                                    <center><img class='img-responsive' src="Admin1/products/<?php echo $product_img2; ?>" alt='Product 1 '></center>
                                </div>
                                <div class='item'>
                                    <center><img class='img-responsive' src="Admin1/products/<?php echo $product_img3; ?>" alt='Product 1'></center>
                                </div>
                            </div>
                            <!--End carousel-inner-->

                            <a href='#mycarousel' class='left carousel-control' data-slide='prev'>
                                <!--left carousel-control-->
                                <span class='glyphicon glyphicon-chevron-left'> </span>
                                <span class='sr-only'>Previous</span>
                            </a>
                            <!--End left carousel-control-->

                            <a href='#mycarousel' class='right carousel-control' data-slide='next'>
                                <span class='glyphicon glyphicon-chevron-right'> </span>
                                <span class='sr-only'>Next</span>
                            </a>
                        </div>
                        <!--End carousel slide-->
                    </div>
                    <!--End MainImage-->

                </div>
                <!--End col-md-6-->
                <!-- Carousel Image -->

                <div class='col-sm-6'>
                    <!-- col-md-6-->
                    <div class='box'>
                        <!--Box-->
                       
                        <h1 class='text-center'>Store <?php echo $product_title;  ?> </h1>
                            <?php include "function/getIpUser.php";?>
                        <form action='details.php?add_cart=<?php echo $product_id;?>' class='form-horizontal' method='post'>
                            <!--form-horizontal-->
                            <div class='form-group'>
                                <!--form-group-->
                                <label for='' class='col-md-5 control-label'>Products Quentity</label>
                                <div class='col-md-7'>
                                    <!--col-md-7-->
                                    <select name='product_qut' id='' class='form-control'>
                                        <!--select-->
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <!--End select-->
                                </div>
                                <!--End col-md-7-->
                            </div>
                            <!--End form-group-->

                            <div class='form-group'>
                                <!--form-group-->
                                <label class='col-md-5 control-label'>Product Size </label>
                                <div class='col-md-7'>
                                    <select name='product_size' class='form-control' required oninput="setCustomValisity('')" oninvalid="setCustomValisity('Must pick 1 size for product')">
                                        <option disabled selected>Select A size</option>
                                        <option>small</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                    </select>
                                </div>
                            </div>
                            <!--End form-group-->

                            <p class='price'> $ <?php echo $product_price;
                                                ?> </p>
                            <p class='text-center buttons'><button class='btn btn-primary i fa fa-shopping-cart'>Add To Cart</button></p>
                        </form>
                        <!--End form-horizontal-->

                    </div>
                    <!--End Box -->

                    <div class='row' id='thumbs'>
                        <!--Row thumbs-->

                        <div class='col-xs-4'>
                            <!--col-xs-4-->
                            <a data-target='#mycarousel' data-slide-to='0' href='#' class='thumb'>
                                <!--Thumb-->
                                <img src="Admin1/products/<?php echo $product_img1; ?>" alt='Product 1 ' class='img-responsive'>
                            </a>
                            <!--End Thumb-->
                        </div>
                        <!--End col-xs-4-->

                        <div class='col-xs-4'>
                            <!--col-xs-4-->
                            <a data-target='#mycarousel' data-slide-to='1' href='#' class='thumb'>
                                <!--Thumb-->
                                <img src="Admin1/products/<?php echo $product_img2; ?>" alt='Product 1 ' class='img-responsive'>
                            </a>
                            <!--End Thumb-->
                        </div>
                        <!--End col-xs-4-->

                        <div class='col-xs-4'>
                            <!--col-xs-4-->
                            <a data-target='#mycarousel' data-slide-to='2' href='#' class='thumb'>
                                <!--Thumb-->
                                <img src="Admin1/products/<?php echo $product_img3; ?>" alt='Product 1 ' class='img-responsive'>
                            </a>
                            <!--End Thumb-->
                        </div>
                        <!--End col-xs-4-->

                    </div>
                    <!--End Row thumbs-->
                </div>
                <!--End col-md-6-->

            </div>
            <!--End productMain-->

            <div id='details' class='box'>
                <!--details-->
                <h4>Product Details</h4>
                <p>
                    <?php echo $product_desc;
                    ?>
                </p>
                <ul class='rating'>
                    <li class='fa fa-star'></li>
                    <li class='fa fa-star'></li>
                    <li class='fa fa-star'></li>
                    <li class='fa fa-star'></li>
                    <li class='fa fa-star'></li>
                </ul>
                <!--
                <h4>Price :  </h4>
                 <p class="pricee">$ <?php echo $product_price?></p>

                <h4>Size</h4>
                <ul>
                    <li>small</li>
                    <li>L</li>
                    <li>XL</li>
                </ul>-->
                <hr>
            </div>
            <!--End details-->

            
           
        </div>
        <!--End col-md-9-->
    </div>
    <!--End container-->
</div>
<!--End content-->
<?php include 'include/footer.php' ?>