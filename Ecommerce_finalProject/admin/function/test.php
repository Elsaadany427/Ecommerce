<?php include 'include/db.php';
?>
<div class = 'form-group'>
<!--form-group -->
<label for = '' class = 'col-md-3 control-label'>Product Category </label>
<div class = 'col-md-6'>
<!--col-md-6 -->
<select name = 'product_cat'  class = 'form-control'>
<!--select -->
<option>Select Category Product</option>
<?php
$get_p_cat = 'select * from product_categories';
$run_p_cat = mysqli_query($conn, $get_p_cat );
while ( $row_p_cat = mysqli_fetch_array( $run_p_cat ) ) {

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