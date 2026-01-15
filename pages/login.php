<?php

require 'connection.php';

if(isset($_POST['submit'])) {
    $email_username = $_POST['email_username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email_username' OR username='$email_username';";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
        $resultFetched = mysqli_fetch_assoc($result);
        if(password_verify($password, $resultFetched['password'])) {

            session_start();
            $_SESSION['user_id'] = $resultFetched['id'];
            $_SESSION['username'] = $resultFetched['username'];

            if (isset($_POST['remember'])) {

                setcookie('user_id', $resultFetched['id'], time() + (86400 * 30), "/"); 
            
            }

            header('Location: index.php');
            exit();
        } else {
            echo "<script>alert('Wrong password');</script>";
        }
    } else {
        echo "<script>alert('No user found with that email/username');</script>";
}
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/login.css">

    <?php include_once 'fonts.php'; ?>
</head>
<body>

    <img src="../style/assets/images/cover_sketch.png" alt="" class="bg-image">
    <div class="login-container">
        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e3e3e3"><path d="m429-40-19-386-163-94-19 68 78 136-51 30-92-157 46-164 237-137-112-112 42-42 168 167-145 83 85 69 318-283 38 38-330 360-20 424h-61ZM193-677q-30 0-51.5-21.5T120-750q0-30 21.5-51.5T193-823q30 0 51.5 21.5T266-750q0 30-21.5 51.5T193-677Z"/></svg>
        <h1>USER LOGIN</h1>
        <p>please enter your details</p><br>
        <form action="login.php" method="POST">
            <!-- <label for="username">Username</label><br> -->
            <input type="text" id="username" name="email_username" placeholder="Username / email" autocomplete="on" required>
            <br>
            <!-- <label for="password">Password</label><br> -->
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <div class="options">
                <div class="remember-me">
                    <input type="checkbox" name="remember" id="remember" class="remember-checkbox"><label for="remember">Remember me</label><br>
                </div>
                <a href="" class="forgot-password">Forgot password?</a>
            </div>
            <br>
            <button type="submit" name="submit">Login</button><br>
            <p class="signup-link">Don't have an account?</p>
            <a href="signup.php" class="signup">Sign up</a>
        </form>
    </div>

</body>
</html>