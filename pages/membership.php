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
    <link rel="stylesheet" href="../style/membership.css">
</head>
<body>

    <div class="container">
        <div class="intro">

            <div class="intro-text">
                <h1>Membership options</h1>
                <p>Choose the plan that fits your journey.</p>
            </div>

            <div class="cards">

                <?php
                
                    include 'connection.php';

                    $sql = "SELECT * FROM memberships;";
                    $result = mysqli_query($con, $sql);

                    $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    // print_r($resultFetched);

                    foreach($resultFetched as $mem) {
                        $tier = $mem['tier_name'];
                        if ($tier === 'Elite') {

                            echo '
                        
                            <div class="card elite">
                                <h1 class="name">'.$mem['tier_name'].'</h1>
                                <h1 class="price">'.$mem['price'].'<span>/mo</span></h1>
                                <hr>
                                <p class="desc">'.$mem['description'].'</p>
                                <a href=""><button class="elite-btn">Choose Plan</button></a>
                                <p class="abs">Best value</p>
                            </div>
                        
                        ';

                        } else {

                            echo '
                            
                                <div class="card" class="'.$mem['tier_name'].'">
                                    <h1 class="name">'.$mem['tier_name'].'</h1>
                                    <h1 class="price">'.$mem['price'].'<span>/mo</span></h1>
                                    <hr>
                                    <p class="desc">'.$mem['description'].'</p>
                                    <a href=""><button>Choose Plan</button></a>
                                </div>
                            
                            ';
                        }


                    }

                ?>

                

            </div>

        </div>
    </div>


    <?php include 'footer.php' ?>
</body>
</html>