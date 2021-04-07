<?php 
 $active = 'account';
include "include/header.php"; 
?>
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

            <div class="col-md-9"> <!--col-md-9-->
                <div class="box"> <!--Box-->
                    <?php 
                        if(isset($_GET['my_orders'])){
                            include ("my_orders.php");
                        }
                        else if(isset($_GET['pay_offline'])){
                            include ("pay_offline.php");
                        }
                        else if(isset($_GET['edit_account'])){
                            include ("edit_account.php");
                        }
                        else if(isset($_GET['change_pass'])){
                            include ("change_pass.php");
                        }
                        else if(isset($_GET['delete_account'])){
                            include ("delete_account.php");
                        }
                        else if(isset($_GET['logout.php'])){
                            include ("logout.php.php");
                        }
                    ?>
                </div> <!--End box-->
            </div> <!--End col-md-9-->
            
            </div> <!--End container-->
    </div> <!--End content-->
    <?php include "include/footer.php"?>
   