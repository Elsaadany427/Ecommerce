<?php 
 $active = 'shopping';
include "include/header.php"; ?>

    <div id="content">
        <!--contant-->

        <div class="container">
            <!--container-->

            <!--breadcrumb-->
            <div class="col-md-12">
                <!--col-md-12-->
                <ul class="breadcrumb">
                    <!--UL-->
                    <li>
                        <!--li-->
                        <a href="index.php">Home</a>
                    </li>
                    <!--End li-->
                    <li>
                        Cart
                    </li>
                </ul>
                <!--End UL-->
            </div>
            <!--End col-md-12-->
            <!--End breadcrumb-->

            <div id="cart" class="col-md-9">
                <!-- col-md-9-->
                <div class="box">
                    <!--Box-->
                    <form action="cart.php" method="post" enctype="multipart/form-data">
                        <!--form-->
                        
                        <?php
                            include "function/getIpUser.php";
                            $select_cart = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
                            $run_cart = mysqli_query($conn , $select_cart);
                            $count_carts = mysqli_num_rows($run_cart);
                        
                        ?>

                        <h1>Shopping cart</h1>
                        <p class="text-multed">Your Currently have <strong><?php echo $count_carts;?> </strong>  item(s) in Your Cart</p>
                        <div class="table-responsive">
                            <!--table-responsive-->
                            <table class="table">
                                <!--table-->
                                <thead>
                                    <!--Thead-->
                                    <tr>
                                        <!--Tr-->
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>
                                    </tr>
                                    <!--End Tr-->
                                </thead>
                                <!--End Thead-->
                                <tbody>
                                    <!--tbody-->

                                    <?php $total = 0 ;
                                    while($row_carts = mysqli_fetch_array($run_cart)){
                                        $products_id = $row_carts['product_id'];
                                        $pro_qty = $row_carts['qty'];
                                        $pro_size = $row_carts['size'];
                                        $get_products = "SELECT * FROM product WHERE product_id = '$products_id'";
                                        $run_products = mysqli_query($conn , $get_products);
                                        while($row_products = mysqli_fetch_array($run_products)){
                                            $products_title = $row_products['product_title'];
                                            $products_img1 = $row_products['product_img1'];
                                            $only_price = $row_products['product_price'];
                                            $sub_total_products = $row_products['product_price']*$pro_qty;
                                            $total_products += $sub_total_products;

                                    ?>
                                    <tr>
                                        <!--tr-->
                                        <td>
                                            <img class="" src="Admin1/products/<?php echo $products_img1; ?>" alt="product 1">
                                        </td>
                                        <td>
                                            <a href="details.php?pro_id=<?php echo $products_id; ?>">Store <?php echo $products_title; ?></a>
                                        </td>
                                        <td>
                                        <?php echo $pro_qty; ?>
                                        </td>
                                        <td>
                                            $ <?php echo $only_price ; ?>
                                        </td>
                                        <td>
                                        <?php echo $pro_size ; ?>
                                        </td>
                                        <td>
                                        
                                            <input type="checkbox" name="remove[]" value="<?php echo $products_id;?>">
                                        </td>
                                        
                                        <td>
                                            $ <?php echo $sub_total_products ; ?>
                                        </td>
                                    </tr>
                                    <!--End tr-->
                                </tbody>
                                <!--End tbody-->
                                <?php }} ?>
                                <tfoot>
                                    <!--Tfoot-->
                                    <tr>
                                        <!--Tr-->
                                        <th colspan="6">Total</th>
                                        <th colspan="2">$ <?php echo $total_products ; ?></th>
                                    </tr>
                                    <!--End tr-->
                                </tfoot>
                                <!--End Tfoot-->
                            </table>
                            <!--End table-->
                        </div>
                        <!--End table-responsive-->

                        <div class="box-footer">
                            <!--box-footer-->
                            <div class="pull-left">
                                <!--Pull-left-->
                                <a href="shop.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                </a>
                            </div>
                            <!--End Pull-left-->

                            <div class="pull-right">
                                <!--Pull-left-->
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                    <i class="fas fa-sync-alt"></i> Update Cart
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed Checkout <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                            <!--End Pull-left-->
                        </div>
                        <!--End box-footer-->
                    </form>
                    <!--End form-->
                </div>
                <!--End Box-->

            </div>
            <!--End col-md-9-->
            <?php
                if(isset($_POST['update'])){
                    foreach($_POST['remove'] as $remove_id){
                        $delete_product = "DELETE FROM cart WHERE product_id='$remove_id'";
                        echo $delete_product  ;
                        $run_delete = mysqli_query($conn , $delete_product);
                        if($run_delete){
                            echo "<script>alert('Product Deleted Successfully')</script>";
                            echo "<script>window.open('cart.php', '_self')</script>";
                        } 
                    }

                }
            ?>
            <div class="col-md-3 ">
                <!-- col-md-3-->
                <div id="order-summary" class="box">
                    <!--order-summary-->
                    <div class="box-header">
                        <!--box-header-->
                        <h3>Order Summary</h3>
                    </div>
                    <!--End box-header-->
                    <p class="text-muted">
                        <!--text-muted-->
                        Shopping and Addition costs are calculated base on value you have entered
                    </p>
                    <!--End text-muted-->
                    <div class="table-responsive">
                        <!--table-responsive-->
                        <table class="table">
                            <!--table-->
                            <tbody>
                                <!--tbody-->
                                <tr>
                                    <td>Order Sub-Total</td>
                                    <th>$200</th>
                                </tr>
                                <tr>
                                    <td>Shopping And Handling</td>
                                    <td>$0</td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th>$0</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>$200</th>
                                </tr>
                            </tbody>
                            <!--End tbody-->
                        </table>
                        <!--End table-->
                    </div>
                    <!--End table-responsive-->
                </div>
                <!--End order-summary-->
            </div>
            <!--End col-md-3-->

        </div>
        <!--End container-->

    </div>
    <!--End content-->
    <?php include "include/footer.php" ?>