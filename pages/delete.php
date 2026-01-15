<?php

    include 'connection.php';

    if(isset($_GET['number'])) {

        if ($_GET['number'] == 1) {
            $id = $_GET['id'];
            $sql = "DELETE FROM instructors WHERE id = '$id';";
            $result = mysqli_query($con, $sql);

            header('Location: admin.php');

        } else if ($_GET['number'] == 2) {

            $id = $_GET['id'];
            $sql = "DELETE FROM memberships WHERE id = '$id';";
            $result = mysqli_query($con, $sql);

            header('Location: admin.php');

        } else {

            $id = $_GET['id'];
            $sql = "DELETE FROM classes WHERE id = '$id';";
            $result = mysqli_query($con, $sql);

            header('Location: admin.php');

        }

    }

?>