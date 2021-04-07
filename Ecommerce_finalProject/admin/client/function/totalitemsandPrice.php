<?php
 include "../include/db.php" ; 
        if(!empty($_SERVER['HTTP_X_REAL_IP'])) { $ip_add=$_SERVER['HTTP_X_REAL_IP'] ;}
        else if(!empty($_SERVER['HTTP_CLIENT_IP'])) {$ip_add =  $_SERVER['HTTP_CLIENT_IP'] ;}
        else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip_add = $_SERVER['HTTP_X_FORWARDED_FOR'] ;}
        else {$ip_add = $_SERVER['REMOTE_ADDR'];}

     $get_items =  "SELECT * FROM cart WHERE ip_add = '$ip_add'";
     $run_items = mysqli_query($conn , $get_items);
     $count_items =  mysqli_num_rows($run_items);

     $total = 0 ;
     $select_cart = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
     $run_cart = mysqli_query($conn , $select_cart);

     while($row_cart = mysqli_fetch_array($run_cart)){
         $product_id_cart = $row_cart['product_id'];
         $product_qty = $row_cart['qty'];
         $get_price = "SELECT * FROM product WHERE product_id = '$product_id_cart'";
         $run_price = mysqli_query($conn , $get_price);
         while($row_price = mysqli_fetch_array($run_price)){
             $sub_total = $row_price['product_price']*$product_qty;
             $total += $sub_total;
             
         }
     }
     
 ?>

