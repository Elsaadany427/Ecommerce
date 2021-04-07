<h1 align="center">Change Your Password </h1>
<form action="contact.php" method="post" enctype="multipart/form-data">
    <!--Form-->
    <div class="form-group">
        <!--Form-group-->
        <label>Your Old Password</label>
        <input type="password" class="form-control" name="old_pass" id="" required>
    </div>
    <!--End Form-group-->
    <div class="form-group">
        <!--Form-group-->
        <label>Your New Password</label>
        <input type="password" class="form-control" name="new_pass" id="" required>
    </div>
    <!--End Form-group-->
    <div class="form-group">
        <!--Form-group-->
        <label>Confirm Your New Password</label>
        <input type="password" class="form-control" name="new_pass_again" id="" required>
    </div>
    <!--End Form-group-->
    
    <!--End Form-group-->
    <div class="text-center">
        <!--Text-center-->
        <button class="btn btn-primary" name="submit" type="submit">
            <i class="fa fa-user-md"></i> Update
        </button>
    </div>
    <!--End Text-center-->
</form>
<!--End Form-->