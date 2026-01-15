<?php

// include "pages/connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="icon" href="style/assets/images/new_logo.png">
    <?php
        // include_once 'fonts.php';
        include_once 'pages/header.php';
    ?>

    <!-- Montserrat Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/af3a94ceb3.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/af3a94ceb3.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <img src="style/assets/images/mainbgimg.jpg" alt="" class="bgimg">
    <div class="index">
        <section class="hero">
            <div class="hero1">
                <h1>EST. 2025</h1>
                <p>MASTER <span class="hero-span">THE ART</span></p>
            </div>
            <div class="hero2">
                <p>Join HTU Martial Arts for world-class training in Judo, Karate, Muay Thai, and Jiu-Jitsu. From beginners to elite athletes, find your path to strength.</p>
                <div class="hero-buttons">
                    <button class="hero-btn1" onclick="window.location.href = 'pages/signup.php'">START TRAINING</button>
                    <button class="hero-btn2" onclick="window.location.href = 'pages/classes.php'">EXPLORE CLASSES</button>
                </div>
            </div>
        </section>
    </div>
    <section class="about-container">
        <section class="about">
            <!-- <div>
                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e3e3e3"><path d="M320-120q-18 0-29-11t-11-29v-95h400v95q0 18-11 29t-29 11H320Zm440-525v127q0 7-1 9l-31 148q-4 17-16 27t-29 10H277q-17 0-29-10t-16-27l-31-148q-1-2-1-9v-262q0-26 17-43t43-17h370q26 0 43 17t17 43v135q0-16 9.5-25.5T725-680q16 0 25.5 9.5T760-645ZM289-384h382l29-147v-37h-70v-212H260v249l29 147Zm46-184h220v-134H335v134Zm145-14Z"/></svg>
                <h2>Expert Coaching</h2>
                <p>Led by Ali Mohammed (4th Dan Judo) and a team of black belt instructors dedicated to your growth.<p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e3e3e3"><path d="m550-84-42-42 142-142-382-382-142 142-42-42 56-58-56-56 85-85-42-42 42-42 43 41 84-84 56 56 58-56 42 42-142 142 382 382 142-142 42 42-56 58 56 56-86 86 42 42-42 42-42-42-84 84-56-56-58 56Z"/></svg>
                <h2>Elite Facilities</h2>
                <p>Large matted areas, fully-equipped fitness gym, sauna, steam room, and premium changing facilities.</p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e3e3e3"><path d="M0-240v-53q0-38.57 41.5-62.78Q83-380 150.38-380q12.16 0 23.39.5t22.23 2.15q-8 17.35-12 35.17-4 17.81-4 37.18v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.86-3.5-37.43T765-377.27q11-1.73 22.17-2.23 11.17-.5 22.83-.5 67.5 0 108.75 23.77T960-293v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480-390q-79 0-129.5 23.5T300-305v5ZM149.57-410q-28.57 0-49.07-20.56Q80-451.13 80-480q0-29 20.56-49.5Q121.13-550 150-550q29 0 49.5 20.5t20.5 49.93q0 28.57-20.5 49.07T149.57-410Zm660 0q-28.57 0-49.07-20.56Q740-451.13 740-480q0-29 20.56-49.5Q781.13-550 810-550q29 0 49.5 20.5t20.5 49.93q0 28.57-20.5 49.07T809.57-410ZM480-480q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm.35-60Q506-540 523-557.35t17-43Q540-626 522.85-643t-42.5-17q-25.35 0-42.85 17.15t-17.5 42.5q0 25.35 17.35 42.85t43 17.5ZM480-300Zm0-300Z"/></svg>
                <h2>Community</h2>
                <p>A supportive environment for all ages. Junior memberships available for the next generation of martial artists.</p>
            </div> -->

            <div>
                <img src="style/assets/images/GYM_building.png" alt="">
            </div>
            <div class="about-text">
                <h2>More Than Just A Gym</h2>
                <p>At HTU Martial Arts, we believe in the transformative power of discipline. Founded with a vision to create the ultimate training ground for both traditional and modern martial arts, we provide an environment where respect, strength, and community thrive.</p>
                <p>Our facility features large matted areas, a fully-equipped strength zone, sauna, and steam rooms. Whether you are here for fitness, self-defense, or competition, our doors are open.</p>
                <div class="cards">
                    <div class="card">
                        <h2>500+</h2>
                        <p>MEMBERS</p>
                    </div>
                    <div class="card">
                        <h2>15+</h2>
                        <p>INSTRUCTORS</p>
                    </div>
                    <div class="card">
                        <h2>4</h2>
                        <p>STYLES</p>
                    </div>
                </div>
            </div>

            
        </section>
        <div class="classes-container">
            <section class="classes">
                <h1>POPULAR CLASSES</h1>
                <div class="classes-header">
                    <p>Find your fighting style.</p>
                    <a href="pages/classes.php">View All <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                
                <div class="cards">

                <?php
                
                    // include 'pages/connection.php';

                    // $sql = "SELECT * FROM classes;";
                    // $result = mysqli_query($con, $sql);

                    // $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    // // print_r($resultFetched);

                    // for ($i = 0; $i < 3; $i++) {

                    //     echo '
                        
                    //         <div class="card">
                    //             <img src="style/assets/images/'.$resultFetched[$i]['name'].'.jpg" alt="">
                    //             <div class="dark-grade"></div>
                    //             <div class="inner-text">
                    //                 <h1>'.$resultFetched[$i]['name'].'</h1>
                    //                 <a href="pages/classes.php">LEARN MORE</a>
                    //             </div>
                    //         </div>
                        
                    //     ';

                    // }
                
                ?>
                
                    <!-- <div class="card">
                        <img src="style/assets/images/Jiu-Jitsu.jpg" alt="">
                        <div class="dark-grade"></div>
                        <div class="inner-text">
                            <h1>JIU-JITSU</h1>
                            <a href="pages/classes.php">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="style/assets/images/Muay Thai.jpg" alt="">
                        <div class="dark-grade"></div>
                        <div class="inner-text">
                            <h1>MUAY THAI</h1>
                            <a href="pages/classes.php">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="style/assets/images/Judo.jpg" alt="">
                        <div class="dark-grade"></div>
                        <div class="inner-text">
                            <h1>JUDO</h1>
                            <a href="pages/classes.php">LEARN MORE</a>
                        </div>
                    </div> -->
                </div>
            </section>
        </div>
    </section>
    <div class="offers-container">
        <section class="offers">
            <div class="offer-text">
                <h1>BUILDING THE FUTURE</h1>

                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-child"></i>
                    </div>
                    <div class="text">
                        <h2 class="uppercase">Kids Martial Arts</h2>
                        <p>Our "Little Warriors" program builds confidence, discipline, and respect. Safe, fun classes for ages 5-12. Junior memberships available.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-shield"></i>
                    </div>
                    <div class="text">
                        <h2 class="uppercase">Self-Defense Courses</h2>
                        <p>Practical, real-world self-defense training. specialized 6-week courses designed to keep you safe and aware in any situation.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-stopwatch"></i>
                    </div>
                    <div class="text">
                        <h2 class="uppercase">Private Tuition</h2>
                        <p>Accelerate your learning with 1-on-1 sessions. Perfect for refining technique or preparing for a grading.</p>
                    </div>
                </div>
            </div>
            <div class="offer-image">
                <img src="style/assets/images/kids.jpg" alt="">
                <div class="dark-grade"></div>
                <div class="inner-text">
                    <h2>Ages 5-12</h2>
                    <p>Junior classes available now</p>
                </div>
            </div>
        </section>
    </div>

    <div class="instructors-container">
        <section class="instructors">
            <div class="header">
                <h1>Learn from the best</h1>
            </div>
            <div class="cards">
                <?php
                
                    // $sql = "SELECT * FROM instructors;";
                    // $result = mysqli_query($con, $sql);

                    // $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);



                    // if($result) {

                    //     // print_r($resultFetched);

                    //     for ($i = 0; $i < 3; $i++) {
                    //     echo '
                    //         <div>
                    //             <img src="'.$resultFetched[$i]["image_path"].'" alt="">
                    //             <h1 class="name">'.$resultFetched[$i]['name'].'</h1>
                    //             <p class="desc">'.$resultFetched[$i]['job_title'].'</p>
                    //         </div>
                    //     ';
                    //     }
                    // }
                
                ?>
                
            </div>
            <div class="instructors-redirect">
                <a href="pages/instructors.php">
                    <button>Meet The Full Team</button>
                </a>
            </div>
        </section>
    </div>
    <div class="stories-container">
        <section class="stories">
            <div class="icon">
                <i class="fa-solid fa-quote-right"></i>
            </div>
            <div>
                <h1>Member stories</h1>
            </div>
            <div class="cards">
                <div class="card">
                    <p>"DoBu changed my life. I joined for the fitness but stayed for the community. The instructors are incredibly knowledgeable and supportive."</p>
                    <div>
                        <h1>JD</h1>
                        <div>
                            <h2>John Doe</h2>
                            <p>Member since 2025</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <p>"My son loves the Junior classes! His confidence has skyrocketed, and he's learning valuable discipline. Highly recommend."</p>
                    <div>
                        <h1>AM</h1>
                        <div>
                            <h2>Amira Salem</h2>
                            <p>Parent</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="join-container">
        <section class="join">
            <div>
                <h1>Start your journey today</h1>
            </div>
            <div>
                <h2>First class is free. No commitments. Just show up and train.</h2>
            </div>
            <div>
                <a href="pages/membership.php"><button>Join HTU GYM now</button></a>
            </div>
        </section>
    </div>
</section>
    <?php 

    // echo "<br><hr><br>";
    
    // include 'classes.php';

    // include 'pages/footer.php';
    
    ?>

   

</body>
</html>
