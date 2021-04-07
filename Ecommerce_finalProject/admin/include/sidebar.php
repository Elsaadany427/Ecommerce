<div class="panel panel-default sidebar-menu">
    <!--panel panel-default sidebar-menu-->
    <div class="panel-heading">
        <!--panel-heading-->
        <h3 class="panel-title">
            <!--panel-title-->
            Product category
        </h3>
        <!--End panel-title-->
    </div>
    <!--End panel-heading-->
    <div class="panel-body">
        <!--panel-body-->
        <ul class="nav nav-pills nav-stacked category-menu">
            <!--panel ul-->
            <?php
                $get_p_cat = 'SELECT * FROM product_categories';
                $run_p_cat = mysqli_query( $conn, $get_p_cat );
                while( $row_p_cat = mysqli_fetch_array( $run_p_cat ) ) {
                    $p_cat_id = $row_p_cat['p_cat_id'];
                    $p_cat_title = $row_p_cat['p_cat_title'];
                    ?>
                    <li>
                    <a href = 'shop.php?p_cat_id=<?php echo $p_cat_id; ?> '>
                        <?php echo $p_cat_title ;
                        ?>
                    </a>
                    </li>
                    <?php
                }
                ?>


        </ul>
        <!--End panel ul -->
    </div>
    <!--End panel-body-->
</div>
<!--End panel panel-default sidebar-menu-->

<div class="panel panel-default sidebar-menu">
    <!--panel panel-default sidebar-menu-->
    <div class="panel-heading">
        <!--panel-heading-->
        <h3 class="panel-title">
            <!--panel-title-->
             category
        </h3>
        <!--End panel-title-->
    </div>
    <!--End panel-heading-->
    <div class="panel-body">
        <!--panel-body-->
        <ul class="nav nav-pills nav-stacked category-menu">
            <!--panel ul-->
            <?php
                $get_cat = 'SELECT * FROM category';
                $run_cat = mysqli_query( $conn, $get_cat );
                while( $row_cat = mysqli_fetch_array( $run_cat ) ) {
                    $cat_id = $row_cat['cat_id'];
                    $cat_title = $row_cat['cat_title'];
                    ?>
                    <li>
                        <a href = 'shop.php?cat_id=<?php echo $cat_id; ?>'>
                            <?php echo $cat_title ;
                            ?>
                        </a>
                    </li>
                    <?php
                }
                ?>


        </ul>
        <!--End panel ul -->
    </div>
    <!--End panel-body-->
</div>
<!--End panel panel-default sidebar-menu-->