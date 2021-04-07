<h1 align="center">Edit Your Account </h1>
<form action="contact.php" method="post" enctype="multipart/form-data">
    <!--Form-->
    <div class="form-group">
        <!--Form-group-->
        <label>Client Name</label>
        <input type="text" class="form-control" name="c_name" id="" required>
    </div>
    <!--End Form-group-->
    <div class="form-group">
        <!--Form-group-->
        <label>Client Email</label>
        <input type="email" class="form-control" name="c_email" id="" required>
    </div>
    <!--End Form-group-->
    <div class="form-group">
        <!--Form-group-->
        <label>Client Country</label>
        <input type="text" class="form-control" name="c_country" id="" required>
    </div>
    <!--End Form-group-->
    <div class="form-group">
        <!--Form-group-->
        <label>Client City</label>
        <input type="text" class="form-control" name="c_city" required >
    </div>
    <!--End Form-group-->
    <div class="form-group">
        <!--Form-group-->
        <label>Client Address</label>
        <input type="text" class="form-control" name="c_address" required>
    </div>
    <!--End Form-group-->
    <div class="form-group">
        <!--Form-group-->
        <label>Client Image</label>
        <input type="file" class="form-control form-height-custome" name="c_image" required>
        <img class="img-responsive"  src="client_img/steve-jobs11.jpeg" alt="">
    </div>

    <!--End Form-group-->
    <div class="text-center">
        <!--Text-center-->
        <button class="btn btn-primary" name="update">
            <i class="fa fa-user-md"></i> Update
        </button>
    </div>
    <!--End Text-center-->
</form>
<!--End Form-->