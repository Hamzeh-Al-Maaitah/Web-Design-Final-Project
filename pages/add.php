<?php

    include 'connection.php';
    include 'fonts.php';

    // print_r($_POST);
    // print_r($_SESSION);

    // header('Location: admin.php');

    if(isset($_POST['add'])) {

        $whichModal = $_POST['whichModal'];

        if ($whichModal == 1) {

            $name = $_POST['instname'];
            $job = $_POST['job_title'];
            $desc = $_POST['qualifications'];

            $sql = "INSERT INTO instructors(name, job_title, qualifications)
            VALUES ('$name', '$job', '$desc');";
            $result = mysqli_query($con, $sql);

            header('Location: admin.php');
            
        } else if ($whichModal == 2) {

            $tier = $_POST['tier'];
            $desc = $_POST['desc'];
            $price = $_POST['price'];

            $sql = "INSERT INTO memberships(tier_name, description, price)
            VALUES ('$tier', '$desc', '$price');";
            $result = mysqli_query($con, $sql);

            header('Location: admin.php');

        } else {


            
        }

    }



    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style/add.css">
</head>
<body>

    <?php
    
        if ($_GET['number'] == 1) {

            
        echo '
        
            <div class="modalInst">
                <div class="content">

                    <form action="add.php" method="POST" enctype="multipart/form-data">
                        <legend>EDIT INSTRUCTOR</legend>
                        <?php
                            
                        ?>
                        <div class="inputs">
                            <div>
                                <input type="hidden" name="whichModal" id="whichModal_inst" value=1>
                            </div>
                            <div>
                                <input type="hidden" name="instid" id="inst_modal_id" placeholder="">
                            </div>
                            <div>
                                <input type="text" name="instname" id="inst_modal_name" placeholder="name">
                            </div>
                            <div>
                                <input type="text" name="job_title" id="inst_modal_job" placeholder="job title">
                            </div>
                            <div>
                                <input type="text" name="qualifications" id="inst_modal_desc" placeholder="description">
                            </div>
                            <div>
                                <input type="file" name="image" id="inst_modal_image">
                            </div>
                            <div>
                                <input type="hidden" name="number" id="inst_modal_image" value=1>
                            </div>
                        </div>
                        <div class="actions">
                            <button type="submit" name="add" id="add">Add</button>
                        </div>
                        <?php //} ?>
                    </form>

                </div>
            </div>

        ';
        
        
        } else if ($_GET['number'] == 2) {

            echo '
            
                <div class="modalPrice">
                    <div class="content">

                        <form action="add.php" method="POST">
                            <legend>EDIT PRICES</legend>
                            <div class="inputs">
                                <div>
                                    <input type="hidden" name="whichModal" id="whichModal_price" value=2>
                                </div>
                                <div>
                                    <input type="hidden" name="memid" id="mem_modal_id">
                                </div>
                                <div>
                                    <input type="text" name="tier" id="mem_modal_tier" placeholder="tier name">
                                </div>
                                <div>
                                    <input type="text" name="desc" id="mem_modal_description" placeholder="description">
                                </div>
                                <div>
                                    <input type="text" name="price" id="mem_modal_price" placeholder="price">
                                </div>
                                 <div>
                                    <input type="hidden" name="number" id="inst_modal_image" value=2>
                                </div>
                            </div>
                            <div class="actions">
                                <button type="submit" id="add">Add</button>
                            </div>
                        </form>

                    </div>
                </div>
            
            ';

        } else {

            echo '
            
                <div class="modalClass">
                    <div class="content">

                        <form action="add.php" method="POST">
                            <legend>EDIT CLASSES</legend>
                            <div class="inputs">
                                <div>
                                    <input type="hidden" name="whichModal" id="whichModal_class" value=3>
                                </div>
                                <div>
                                    <input type="hidden" name="classid" id="class_modal_id">
                                </div>
                                <div>
                                    <input type="text" name="classname" id="class_modal_className" placeholder="name">
                                </div>
                                <div>
                                    <input type="text" name="classdesc" id="class_modal_classDescription" placeholder="description">
                                </div>
                                 <div>
                                    <input type="hidden" name="number" id="inst_modal_image" value=3>
                                </div>
                            </div>
                            <div class="actions">
                                <button type="submit" id="add">Add</button>
                            </div>
                        </form>

                    </div>
                </div>
            
            ';

        }
    ?>
</body>
</html>