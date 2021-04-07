<?php 
 $active = 'contact';
include "include/header.php"; ?>

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
                        Contact us
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
                            <h2>Feel Free To contact us</h2>
                            <p class="text-muted">
                                if you have a question , feel free to contact us.
                            </p>
                        </center>
                        <form action="contact.php" method="post">
                            <!--Form-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>subject</label>
                                <input type="text" class="form-control" name="subject" id="" required>
                            </div>
                            <!--End Form-group-->
                            <div class="form-group">
                                <!--Form-group-->
                                <label>Massage</label>
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                            <!--End Form-group-->
                            <div class="text-center">
                                <!--Text-center-->
                                <button class="btn btn-primary" type="submit" name="submit">
                                    <i class="fa fa-user-md"></i> Send Message
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