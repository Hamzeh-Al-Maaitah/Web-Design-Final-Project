<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php 
        include_once 'header.php'; 
        include_once 'fonts.php';  
    ?>
    <link rel="stylesheet" href="../style/instructors.css">
</head>
<body>
    
    <div class="container">
        <div class="intro">

            <div class="intro-text">
                <h1>Meet the team</h1>
                <p>Wrold-class instructors from dedicated professionsals.</p>
            </div>

            <div class="cards">

                <?php
                
                    include 'connection.php';

                    $sql = "SELECT * FROM instructors;";
                    $result = mysqli_query($con, $sql);

                    $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    // print_r($resultFetched);

                    foreach($resultFetched as $inst) {

                        echo '
                        
                            <div class="card">
                                <img src="../uploads/'.$inst['name'].'.jpg" alt="">
                                <div class="text">
                                    <div class="name">'.$inst['name'].'</div>
                                    <h1 class="job">'.$inst['job_title'].'</h1>
                                    <p class="desc">'.$inst['qualifications'].'</p>
                                </div>
                            </div>
                        
                        ';

                    }

                ?>
                

                

            </div>

        </div>
    </div>

    <?php include 'footer.php' ?>

</body>
</html>