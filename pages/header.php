<?php
    $current_page = basename($_SERVER['PHP_SELF']);

    include_once 'fonts.php';

    session_start();

    

?>

    <link rel="stylesheet" href="../style/header.css">

<style>
    .hover.active {
        border-bottom: solid 2px var(--primary);
        color: var(--primary);
        text-shadow: 0px 0px 20px var(--primary);
    }
</style>

<header>
    <nav class="login-signup-nav">
        <?php if(isset($_SESSION['user_id'])) { ?>
           <a href=""><div class="username"><?php echo $_SESSION['username']?></div></a>
        <?php } else {?>
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
        <?php }?>
    </nav>

    <nav class="nav">
        <a href="index.php" class="hover <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
        <a href="classes.php" class="hover <?php echo ($current_page == 'classes.php') ? 'active' : ''; ?>">Classes</a>
        <a href="timetable.php" class="hover <?php echo ($current_page == 'timetable.php') ? 'active' : ''; ?>">Timetable</a>
        <a href="membership.php" class="hover <?php echo ($current_page == 'membership.php') ? 'active' : ''; ?>">Pricing</a>
        <a href="instructors.php" class="hover <?php echo ($current_page == 'instructors.php') ? 'active' : ''; ?>">Instructors</a>
    </nav>

    <a href="index.php">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e3e3e3"><path d="m429-40-19-386-163-94-19 68 78 136-51 30-92-157 46-164 237-137-112-112 42-42 168 167-145 83 85 69 318-283 38 38-330 360-20 424h-61ZM193-677q-30 0-51.5-21.5T120-750q0-30 21.5-51.5T193-823q30 0 51.5 21.5T266-750q0 30-21.5 51.5T193-677Z"/></svg>
            <div class="inner-logo">
                <h1 class="h1">HTU</h1>
                <p class="p">Martial arts</p>
            </div>
        </div>
    </a>
</header>