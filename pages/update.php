<?php

    include 'connection.php';

    if(!isset($_POST['submit'])) {

        $whichModal = $_POST['whichModal'];

        if ($whichModal == 1) {//edit instructors 

            $id = $_POST['id'];
            $name = $_POST['name'];
            $job_title = $_POST['job_title'];
            $desc = $_POST['qualifications'];
            // $image = $_POST['image'];

            $sql = "UPDATE instructors SET 
            name = '$name',
            job_title = '$job_title',
            qualifications = '$desc'
            WHERE id=$id;";

            $result = mysqli_query($con, $sql);

            if ($result) {
                header('Location: admin.php');
            } else {
                mysqli_error($con);
            }
            
        } elseif ($whichModal == 2) { //edit prices
            
            $id = $_POST['id'];
            $tier = $_POST['tier'];
            $desc = $_POST['desc'];
            $price = $_POST['price'];
            // $image = $_POST['image'];

            $sql = "UPDATE memberships SET 
            tier_name = '$tier',
            description = '$desc',
            price = '$price'
            WHERE id=$id;";

            $result = mysqli_query($con, $sql);

            if ($result) {
                header('Location: admin.php');
            } else {
                mysqli_error($con);
            }
            
        } else { //edit classes
            
            $id = $_POST['id'];
            $tier = $_POST['name'];
            $desc = $_POST['desc'];
            // $image = $_POST['image'];

            $sql = "UPDATE classes SET 
            name = '$tier',
            description = '$desc'
            WHERE id=$id;";

            $result = mysqli_query($con, $sql);

            if ($result) {
                header('Location: admin.php');
            } else {
                mysqli_error($con);
            }

        }

    }

?>