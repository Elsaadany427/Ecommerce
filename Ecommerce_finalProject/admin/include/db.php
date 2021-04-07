<?php 

    $conn = mysqli_connect("localhost","root","","Admin_store");
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
?>