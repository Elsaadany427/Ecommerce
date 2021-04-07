<?php
include '../include/db.php';

        if(!empty($_SERVER['HTTP_X_REAL_IP'])) { $ip_add=$_SERVER['HTTP_X_REAL_IP'] ;}
        else if(!empty($_SERVER['HTTP_CLIENT_IP'])) {$ip_add = $_SERVER['HTTP_CLIENT_IP'] ;}
        else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip_add = $_SERVER['HTTP_X_FORWARDED_FOR'] ;}
        else {$ip_add = $_SERVER['REMOTE_ADDR'];}

    if(isset($_GET['add_cart'])){
        $p_id = $_GET['add_cart'];
        $product_qty = $_POST['product_qut'];
        $product_size = $_POST['product_size'];
        //echo $product_size;
        $check_product = "SELECT * FROM cart WHERE ip_add = '$ip_add' AND product_id ='$p_id'";
        $run_check = mysqli_query($conn,$check_product);
        if(mysqli_num_rows($run_check) > 0){
            echo "<script>alert('This Product Has Already Added In Cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id' , '_self')</script>";
        }else{
            $quary = "INSERT INTO cart (product_id,ip_add,qty,size) VALUES ('$p_id','$ip_add','$product_qty','$product_size')";
            $run_quary = mysqli_query($conn , $quary);
            echo "<script>alert('Product Added Successfully')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id' , '_self')</script>";
            
        }
    }
?>