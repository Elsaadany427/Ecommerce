<?php include "include/header.php"; ?>

    <div id="content">
        <!--contant-->
        <div class="container">
            <!--container-->
            <div class="col-md-12">
                <!--col-md-12-->
                <ul class="breadcrumb">
                    <!--UL-->
                    <li>
                        <!--li-->
                        <a href="index.php">Home</a>
                    </li>
                    <!--End li-->
                    <li>
                        Register
                    </li>
                </ul>
                <!--End UL-->
            </div>
            <!--End col-md-12-->
            
            <div class="col-md-3">
                <!--col-md-3-->
                <?php include "include/sidebar.php" ?>
            </div>
            <!--End col-md-3-->

            <div class="col-md-9">
                <!--col-md-9-->
                <div class="box">
                    <!--box-->
                    <div class="box-header">
                        <!--Box-header-->
                        <center>
                            <h2>Registertion Form </h2>
                        </center>
                        <form action="client_Register.php" method="post">
                            <!--Form-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="c_name" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Your Email</label>
                                <input type="email" class="form-control" name="c_email" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Your Password</label>
                                <input type="password" class="form-control" name="c_pass" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Your Country</label>
                                <input type="text" class="form-control" name="c_country" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Your City</label>
                                <input type="text" class="form-control" name="c_city" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Your Contact</label>
                                <input type="text" class="form-control" name="c_contact" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Your Address</label>
                                <input type="text" class="form-control" name="c_address" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group ">
                                <!--Form-group-->
                                <label>Your Profile Picture</label>
                                <input type="file" class="form-control form-height-custome" name="c_image" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="text-center">
                                <!--Text-center-->
                                <button class="btn btn-primary" type="submit" name="Register">
                                    <i class="fa fa-user-md"></i> Register
                                </button>
                            </div>
                            <!--End Text-center-->
                        </form>
                        <!--End Form-->
                    </div>
                    <!--End box-header-->
                </div>
                <!--End box-->
            </div>
            <!--End col-md-9-->
            
        </div>
        <!--End container-->
    </div>
    <!--End content-->
    <?php include "include/footer.php" ?>