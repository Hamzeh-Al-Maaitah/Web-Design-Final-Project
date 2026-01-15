<?php

    require 'connection.php';

    if (isset($_POST['submit'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $checkSql = "SELECT * FROM users WHERE email='$email' OR username='$username';";
        $checkResult = mysqli_query($con, $checkSql);

        if (mysqli_num_rows($checkResult) > 0) {

            $row = mysqli_fetch_assoc($checkResult);

            if ($email == $row['email']) {
                echo "<script>alert('Email already registered');</script>";
            } elseif ($username == $row['username']) {
                echo "<script>alert('Username has been taken');</script>";
            }

        } else {

            $password = password_hash($password, PASSWORD_DEFAULT);

            $insertSql = "INSERT INTO users (firstName, lastName, email, username, password)
                    VALUES ('$firstName', '$lastName', '$email', '$username', '$password');";
            
            $insertResult = mysqli_query($con, $insertSql);

            if ($insertResult) {
                echo "<script>alert('Registration successful');</script>";
                header('Location: login.php');
            } else {
                mysqli_error($con);
            }
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/signup.css">

    <?php include_once 'fonts.php'; ?>


    <script src="../script/signup.js"></script>
</head>
<body>

    <img src="../style/assets/images/cover_sketch.png" alt="" class="bg-image">
    <div class="login-container">
        <svg class = "logo" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e3e3e3"><path d="m429-40-19-386-163-94-19 68 78 136-51 30-92-157 46-164 237-137-112-112 42-42 168 167-145 83 85 69 318-283 38 38-330 360-20 424h-61ZM193-677q-30 0-51.5-21.5T120-750q0-30 21.5-51.5T193-823q30 0 51.5 21.5T266-750q0 30-21.5 51.5T193-677Z"/></svg>
        <h1>USER SIGNUP</h1>
        <p>please enter your details</p><br>
        <form action="signup.php" method="POST">
           
            <input type="text" id="firstName" name="firstName" placeholder="First Name" id="input" onclick="clicked()" required>
            <br>
            <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="input" onclick="clicked()" required>
            <br>
            <input type="email" id="email" name="email" placeholder="Email" class="input" onclick="clicked()" required>
            <br>
            <input type="text" id="username" name="username" placeholder="Username" class="input" onclick="clicked()" required>
            <br>
            <input type="password" id="password" name="password" placeholder="Password" class="input" onclick="clicked()" required><br>
            <br>
            <button type="submit" name="submit">Sign up</button><br>
            <p class="signup-link">Already have an account?</p>
            <a href="login.php" class="signup">Login</a>
        </form>
    </div>

</body>
</html>