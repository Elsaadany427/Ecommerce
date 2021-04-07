<div class="panel panel-default sidebar-menu">
    <!--panel panel-default sidebar-menu-->
    <div class="panel-heading">
        <!--panel-heading-->
        <center>
            <img class="img-responsive" src="client_img/steve-jobs11.jpeg" alt="">
        </center>
        <br />

        <h3 align="center" class="panel-title">
            <!--panel-title-->
            Name : Steven Jobs
        </h3>
        <!--End panel-title-->

    </div>
    <!--End panel-heading-->

    <div class="panel-body">
        <!--panel-body-->
        <ul class="nav nav-pills nav-stacked category-menu">
            <!--panel ul-->
            <li class="<?php if (isset($_GET['my_orders'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> My Orders
                </a>
            </li>
            <li class="<?php if (isset($_GET['pay_offline'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Pay Offline
                </a>
            </li>
            <li class="<?php if (isset($_GET['edit_account'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?edit_account">
                    <i class="fas fa-user-edit"></i> Edit Account
                </a>
            </li>
            <li class="<?php if (isset($_GET['change_pass'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Change Password
                </a>
            </li>
            <li class="<?php if (isset($_GET['delete_account'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?delete_account">
                    <i class="fas fa-trash-alt"></i> Delete Account
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i> Log Out
                </a>
            </li>
        </ul>
        <!--End panel ul -->
    </div>
    <!--End panel-body-->
</div>
<!--End panel panel-default sidebar-menu-->