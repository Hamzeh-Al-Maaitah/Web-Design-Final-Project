<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Classes</title>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="../style/classes.css">
    <link rel="stylesheet" href="../style/fonts.css">

    <?php 
        include_once 'header.php';  
    ?>

    <link rel="stylesheet" href="header.css">

</head>
<body>


    <div class="intro">
        <h1>OUR DISCIPLINES</h1>
        <p>We offer comprehensive training in four major martial arts disciplines, plus specialized fitness and self-defense courses.</p>
    </div>



    <div class="cont"> <!-- named it "cont" instead of "container" because "container" has some styling done to it previously by bootstrap I believe -->
        <?php
        
            include 'connection.php';

            $sql = "SELECT * FROM classes;";
            $result = mysqli_query($con, $sql);

            $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($resultFetched as $class) {

                echo '

                    <div class="card">
                        <div class="card-img">
                            <img src="../style/assets/images/'.$class['name'].'.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">'.$class['name'].'</h5>
                            <p class="card-text">'.$class['description'].'</p>
                        </div>
                    </div>

                ';

            }
        
        ?>
            
    </div>



    <div class="add">
        <h1 class="addh1">Spicialist courses</h1>
        <div class="add-boxes">

            <?php
            
            $sql = "SELECT * FROM specialist;";
            $result = mysqli_query($con, $sql);

            $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($resultFetched as $class) {

                echo '
                
                    <div>
                        <h1>'.$class['name'].'</h1>
                        <h2>'.$class['price'].' / JD'.'</h2>
                        <p>'.$class['details'].'</p>
                    </div>
                
                ';
            }
            
            ?>
        </div>
    </div>



    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    <?php include_once 'footer.php' ?>

</body>
</html>