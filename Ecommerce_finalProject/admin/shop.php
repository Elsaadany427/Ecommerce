<?php
$active = 'shop';
include 'include/header.php';
?>

<div id='content'>
    <!--contant-->
    <div class='container'>
        <!--container-->

        <!--breadcrumb-->
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
                    shop
                </li>
            </ul>
            <!--End UL-->
        </div>
        <!--End col-md-12-->
        <!--End breadcrumb-->

        <!-- Slidebar -->
        <div class='col-md-3'>
            <!--col-md-3-->
            <?php include 'include/sidebar.php' ?>
        </div>
        <!--End col-md-3-->
        <!-- End Slidebar -->

        <div class='col-md-9'>
            <!--col-md-9-->

            <?php

            if (!(isset($_GET['p_cat_id']))) {
                if (!isset($_GET['cat_id'])) {

                    echo "
            <div class='box'>
                <h1>Shop</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, eveniet odio in culpa iusto quae cupiditate corrupti eaque alias molestiae sint quia, molestias amet unde, ut quo doloribus optio laudantium?</p>
            </div> 
            ";
                }
            }

            ?>
   
            <div class='row shopRow'>
                <!--row-->
                <?php
                include 'function/getcatproshop.php';
                ?>

            </div>
            <!--End row-->
            <center>
                <ul class='pagination'>
                    <?php
                    $query = 'SELECT * FROM product';
                    $result = mysqli_query($conn, $query);
                    $total_records = mysqli_num_rows($result);
                    $total_pages = ceil($total_records / $per_page);
                    echo "
            <li><a href = 'shop.php?page=1'> " . 'First Page' . "</a></li>
         ";
                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo "
                  <li><a href = 'shop.php?page=" . $i . "'> " . $i . "</a></li>
                  ";
                    };
                    echo "
            <li><a href = 'shop.php?page=$total_pages'> " . 'Last Page' . "</a></li>
         ";

                    ?>

                </ul>
            </center>
        </div>
        <!--End col-md-9-->

    </div>
    <!--End container-->
</div>
<!--End content-->

<?php include 'include/footer.php' ?>