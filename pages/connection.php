<?php

    $con = new mysqli('localhost', 'root', '', 'htu_gym');

    $sql = 'SELECT * FROM instructors';

    $result = mysqli_query($con, $sql);

    if($con) {
        // echo "success";
    } else {
        // mysqli_error($con);
    }
    
?>