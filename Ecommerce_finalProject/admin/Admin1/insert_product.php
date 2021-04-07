<?php include "include/db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Product </title>
    <link rel="stylesheet" href="styles/main.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">    
    <script src="https://cdn.tiny.cloud/1/klrk7wosdwl8cs6ptwx65um05t1poj2lmhfseq3xfgmh6eu0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>    <script>tinymce.init({selector:'textarea'});</script>
</head>

<body>
    <div class="row">
        <!-- Row -->
        <div class="col-lg-12">
            <!-- col-lg-12 -->
            <ol class="breadcrumb">
                <!-- breadcrumb -->
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Insert Product
                </li>
            </ol> <!-- End breadcrumb -->
        </div> <!-- End col-lg-12 -->
    </div> <!-- End Row -->

    <div class="row">
        <!-- Row -->
        <div class="col-lg-12">
            <!-- col-lg-12 -->
            <div class="panel panel-default">
                <!-- panel panel-default -->
                <div class="panel-heading">
                    <!--  panel-heading -->
                    <h3 class="panel-title">
                        <!--  panel-title -->
                        <i class="fas fa-tachometer-alt"></i> Insert Product
                    </h3> <!-- End panel-title -->
                </div> <!--  End panel-heading -->
                <div class="panel-body">
                    <!--panel-body -->
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <!--form-horizontal -->
                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label">Product Title </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <input type="text" class="form-control" name="product_title" required>
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->

                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label">Product Category </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <select name="product_cat"  class="form-control">
                                    <!--select -->
                                    <option>Select Category Product</option>
                                    <?php
                                    $get_p_cat = "select * from product_categories";
                                    $run_p_cat = mysqli_query($conn, $get_p_cat);
                                    while ($row_p_cat = mysqli_fetch_array($run_p_cat)) {

                                        $p_cat_id = $row_p_cat['p_cat_id'];
                                        $p_cat_title = $row_p_cat['p_cat_title'];
                                        echo "
                                            <option value='$p_cat_id'>$p_cat_title </option>
                                            ";
                                    }

                                    ?>
                                </select>
                                <!--End select -->
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->


                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label"> Category </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <select name="cat"  class="form-control">
                                    <!--select -->
                                    <option>Select Category</option>
                                    <?php
                                    $get_cat = "select * from category";
                                    $run_cat = mysqli_query($conn, $get_cat);
                                    while ($row_cat = mysqli_fetch_array($run_cat)) {
                                        $cat_id = $row_cat['cat_id'];
                                        $cat_title = $row_cat['cat_title'];
                                        echo "
                                            <option value='$cat_id'>$cat_title</option>
                                            ";
                                    }
                                    ?>
                                </select>
                                <!--End select -->
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->

                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label">Product Image 1 </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <input type="file" class="form-control" name="product_img1" required>
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->

                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label">Product Image 2 </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <input type="file" class="form-control" name="product_img2" >
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->

                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label">Product Image 3 </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <input type="file" class="form-control" name="product_img3" >
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->

                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label">Product Price </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <input type="text" class="form-control" name="product_price" required>
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->

                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label">Product Keywords </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <input type="text" class="form-control" name="product_keywords" required>
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->

                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label">Product Desc </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <textarea class="form-control" name="product_desc" cols="19" rows="6" ></textarea>
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->

                        <div class="form-group">
                            <!--form-group -->
                            <label for="" class="col-md-3 control-label"> </label>
                            <div class="col-md-6">
                                <!--col-md-6 -->
                                <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
                            </div>
                            <!--End col-md-6 -->
                        </div>
                        <!--End form-group -->

                    </form>
                    <!--End form-horizontal -->
                </div>
                <!--End panel-body -->
            </div> <!-- End panel panel-default -->
        </div> <!-- End col-lg-12 -->
    </div> <!-- End Row -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>

</html>

<?php 

    if(isset($_POST['submit'])){
        
        $product_title = $_POST['product_title']; 
        $product_cat = $_POST['product_cat']; 
        $cat = $_POST['cat']; 
        $product_price = $_POST['product_price']; 
        $product_keywords = $_POST['product_keywords']; 
        $product_desc = $_POST['product_desc']; 


        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];
/*
        $imgArr1 = explode('.',$product_img1);
        $imgArr2 = explode('.',$product_img2);
        $imgArr3 = explode('.',$product_img3);

        $rand = rand(10000,9999);
        $newImg1 = $imgArr1[0].$rand.'.'.$imgArr1[1];
        $newImg2 = $imgArr2[0].$rand.'.'.$imgArr2[1];
        $newImg3 = $imgArr3[0].$rand.'.'.$imgArr3[1];

        $UploadPathimg1 = "products_img/".$newImg1;
        $UploadPathimg2 = "products_img/".$newImg2;
        $UploadPathimg3 = "products_img/".$newImg3;

        $isUploaded1 = move_uploaded_file($_FILES["product_img1"]["tmp_name"],$UploadPathimg1);
        $isUploaded2 = move_uploaded_file($_FILES["product_img2"]["tmp_name"],$UploadPathimg2);
        $isUploaded3 = move_uploaded_file($_FILES["product_img3"]["tmp_name"],$UploadPathimg3);

        if($isUploaded)
            echo 'successfully file uploaded';
         else
            echo 'something went wrong'; 
*/
        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        
        move_uploaded_file($temp_name1,"products/".$product_img1);
        move_uploaded_file($temp_name2,"products/".$product_img2);
        move_uploaded_file($temp_name3,"products/".$product_img3);


        $insert_product = "INSERT INTO product (p_cat_id ,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc)
        VALUES('$product_cat' , '$cat' , NOW() , '$product_title' , '$product_img1' , '$product_img2','$product_img3' , '$product_price' ,'$product_keywords','$product_desc')";

        $run_product = mysqli_query($conn,$insert_product);
        if ($run_product) {
            echo  "<script> alert('Product Has Added Successfully ')</script>";
            echo "<script>window.open('insert_product.php','_self')</script>";
          } else {
            echo "Error: " . $insert_product . "<br>" . $conn->error;
          }
          
        
    }
?>







