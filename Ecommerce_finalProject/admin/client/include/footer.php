<?php include 'include/db.php';
?>
<footer class = 'bg-primary text-white text-center text-lg-start'>
<!-- Grid container -->
<div class = 'container p-4'>
<!--Grid row-->
<div class = 'row'>
<!--Grid column-->
<div class = 'col-lg-6 col-md-12 mb-4 mb-md-0'>
<h5 class = 'text-uppercase'>Footer Content</h5>

<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
voluptatem veniam, est atque cumque eum delectus sint!
</p>
</div>
<!--Grid column-->

<!--Grid column-->
<div class = 'col-lg-3 col-md-6 mb-4 mb-md-0'>
<h5 class = 'text-uppercase mb-0'>Links</h5>
<ul class = 'list-unstyled'>
<?php
$get_p_cat = 'SELECT * FROM product_categories';
$run_p_cat = mysqli_query( $conn, $get_p_cat );
while( $row_p_cat = mysqli_fetch_array( $run_p_cat ) ) {
    $p_cat_id = $row_p_cat['p_cat_id'];
    $p_cat_title = $row_p_cat['p_cat_title'];
    ?>
    <li align = "left">
      <a href = 'shop.php?p_cat_id =<?php echo $p_cat_id; ?> '>
        <?php echo $p_cat_title ;
        ?>
      </a>
    </li>
    <?php
}
?>


</ul>
</div>
<!--Grid column-->
</div>
<!--Grid row-->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class = 'text-center p-3 copyright' style = 'background-color: rgba(0, 0, 0) ; padding-top:15px ; padding-bottom:15px'>
© 2020 Copyright:
</div>
<!-- Copyright -->
</footer>

<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>

</body>
</html>
