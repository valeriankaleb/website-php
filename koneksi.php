<?php
    $con = mysqli_connect("localhost","root","","warung_ronde");

    if (mysqli_connect_errno()) {
        echo "Failed Connect: " . mysqli_connect_errno();
        exit();
    }
?>