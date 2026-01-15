<?php

    require 'connection.php';
    include 'fonts.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/af3a94ceb3.js" crossorigin="anonymous"></script>

    <script src = "../script/admin.js"></script>

    <link rel="stylesheet" href="../style/admin.css">

</head>
<body>

    <h1><i class="fa-solid fa-gear" style="color: rgb(255, 49, 49)"></i> Admin Dashboard</h1>

    <hr>

    <div class="container">

        <div class="manage-inst">

            <?php
            
            $sql = "SELECT * FROM instructors;";
            $result = mysqli_query($con, $sql);
            
            $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

            ?>

            <div class="header">
                <h2>MANAGE INSTRUCTORS</h2>
                <a href="add.php?number=1"><button >+ Add</button></a>
            </div>

            <div class="list-items">

                <?php
                

                    if ($result) {
                        foreach ($resultFetched as $inst) {
                            // <img src="../style/assets/images/instructors/'.$inst['image'].'" alt="">
                            // echo '
                            //     <div class="item">
                            //         <div class="desc">
                            //             <h3>'.$inst['name'].'</h3>
                            //             <p>'.$inst['job_title'].'</p>
                            //         </div>
                            //         <div class="actions">
                            //             <button class="edit" id="button" onclick="openEditModal(button)"><i class="fa-solid fa-pen"></i></button>
                            //             <button class="delete" id="button"><i class="fa-solid fa-trash"></i></button>
                            //         </div>
                            //     </div>
                            // ';

                            // print_r($inst);
                            $number = 1;
                            echo '
                                <div class="item">
                                    <div class="desc">
                                        <h3>'.$inst['name'].'</h3>
                                        <p>'.$inst['job_title'].'</p>
                                    </div>
                                    <div class="actions">
                                    <button class="edit" 
                                            onclick="openEditModal(this,'.$number.')" 
                                            data-instid="'.$inst['id'].'"
                                            data-name="'.$inst['name'].'"
                                            data-job="'.$inst['job_title'].'"
                                            data-desc="'.$inst['qualifications'].'">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                        <a href="delete.php?number=1&id='.$inst['id'].'"><button class="delete" id="button""><i class="fa-solid fa-trash"></i></button></a>
                                    </div>
                                </div>
                            ';
                        }
                    }
                ?>

            </div>

        </div>

        <div class="manage-price">

            <?php
            
            $sql = "SELECT * FROM memberships;";
            $result = mysqli_query($con, $sql);
            
            $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

            // print_r($resultFetched    );
            ?>

            <div class="header">
                <h2>MANAGE PRICING</h2>
                <a href="add.php?number=2"><button >+ Add</button></a>
            </div>

            <div class="list-items">

                <?php
                

                    if ($result) {
                        foreach ($resultFetched as $mem) {
                            // <img src="../style/assets/images/instructors/'.$inst['image'].'" alt="">
                            // print_r($mem);
                            $number = 2;
                            // print_r($mem);
                            echo '
                                <div class="item">
                                    <div class="desc">
                                        <h3>'.$mem['tier_name']." - ".$mem['price'].'</h3>
                                        <p>'.$mem['description'].'</p>
                                    </div>
                                    <div class="actions">
                                        <button class="edit" 
                                            onclick="openEditModal(this,'.$number.')" 
                                            data-memid="'.$mem['id'].'"
                                            data-tier="'.$mem['tier_name'].'"
                                            data-description="'.$mem['description'].'"
                                            data-price="'.$mem['price'].'">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                        <a href="delete.php?number=1&id='.$mem['id'].'"><button class="delete" id="button""><i class="fa-solid fa-trash"></i></button></a>
                                    </div>
                                </div>
                            ';
                        }
                    }
                ?>

            </div>

        </div>

        <div class="manage-class">

            <?php
            
            $sql = "SELECT * FROM classes;";
            $result = mysqli_query($con, $sql);
            
            $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

            ?>

            <div class="header">
                <h2>MANAGE CLASSES</h2>
                <a href="add.php?number=3"><button >+ Add</button></a>
            </div>

            <div class="list-items">

                <?php
                

                    if ($result) {

                        // print_r($resultFetched);

                        $number = 3;

                        foreach ($resultFetched as $class) {
                            // <img src="../style/assets/images/instructors/'.$inst['image'].'" alt="">
                            echo '
                                <div class="item">
                                    <div class="desc">
                                        <h3>'.$class['name'].'</h3>
                                        <p>'.$class['description'].'</p>
                                    </div>
                                    <div class="actions">
                                        <button class="edit" 
                                            onclick="openEditModal(this,'.$number.')" 
                                            data-classid="'.$class['id'].'"
                                            data-className="'.$class['name'].'"
                                            data-classDescription="'.$class['description'].'">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                        <a href="delete.php?number=1&id='.$class['id'].'"><button class="delete" id="button""><i class="fa-solid fa-trash"></i></button></a>
                                    </div>
                                </div>
                            ';
                        }
                    }
                ?>

            </div>

        </div>
    </div>


    <div class="modalInst">
        <div class="content">

            <form action="update.php" method="POST" enctype="multipart/form-data">
                <legend>EDIT INSTRUCTOR</legend>
                <?php
                    // $sql = "SELECT * FROM instructors;";
                    // $result = mysqli_query($con,$sql);

                    // $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    // // print_r($resultFetched);

                    // foreach($resultFetched as $inst) {
                    //     $name = $inst['name'];
                    //     $job = $inst['job_title'];
                    //     $desc = $inst['qualifactions'];
                    //     $image_path = $inst['image_path'];
                ?>
                <div class="inputs">
                    <div>
                        <input type="hidden" name="whichModal" id="whichModal_inst">
                    </div>
                    <div>
                        <input type="hidden" name="id" id="inst_modal_id">
                    </div>
                    <div>
                        <input type="text" name="name" id="inst_modal_name">
                    </div>
                    <div>
                        <input type="text" name="job_title" id="inst_modal_job">
                    </div>
                    <div>
                        <input type="text" name="qualifications" id="inst_modal_desc">
                    </div>
                    <div>
                        <input type="file" name="image" id="inst_modal_image">
                    </div>
                </div>
                <div class="actions">
                    <button type="submit" name="update" id="update">Update</button>
                    <button type="button" onclick="closeModal(1)">Cancel</button>
                </div>
                <?php //} ?>
            </form>

        </div>
    </div>
    
    <div class="modalPrice">
        <div class="content">

            <!-- <h2>EDIT MEMBERSHIPS</h2> -->

            <form action="update.php" method="POST">
                <legend>EDIT PRICES</legend>
                <?php
                    // $sql = "SELECT * FROM memberships;";
                    // $result = mysqli_query($con,$sql);

                    // $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    // // print_r($resultFetched);

                    // foreach($resultFetched as $mem) {
                    //     $name = $mem['tier_name'];
                    // }
                ?>
                <div class="inputs">
                    <div>
                        <input type="hidden" name="whichModal" id="whichModal_price">
                    </div>
                    <div>
                        <input type="hidden" name="id" id="mem_modal_id">
                    </div>
                    <div>
                        <input type="text" name="tier" id="mem_modal_tier">
                    </div>
                    <div>
                        <input type="text" name="desc" id="mem_modal_description">
                    </div>
                    <div>
                        <input type="text" name="price" id="mem_modal_price">
                    </div>
                </div>
                <div class="actions">
                    <button type="submit" id="update">Update</button>
                    <button type="button" onclick="closeModal(2)">Cancel</button>
                </div>
            </form>

        </div>
    </div>

    <div class="modalClass">
        <div class="content">

            <!-- <h2>EDIT MEMBERSHIPS</h2> -->

            <form action="update.php" method="POST">
                <legend>EDIT CLASSES</legend>
                <?php
                    // $sql = "SELECT * FROM memberships;";
                    // $result = mysqli_query($con,$sql);

                    // $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    // // print_r($resultFetched);

                    // foreach($resultFetched as $mem) {
                    //     $name = $mem['tier_name'];
                    // }
                ?>
                <div class="inputs">
                    <div>
                        <input type="hidden" name="whichModal" id="whichModal_class">
                    </div>
                    <div>
                        <input type="hidden" name="id" id="class_modal_id">
                    </div>
                    <div>
                        <input type="text" name="name" id="class_modal_className">
                    </div>
                    <div>
                        <input type="text" name="desc" id="class_modal_classDescription">
                    </div>
                </div>
                <div class="actions">
                    <button type="submit" id="update">Update</button>
                    <button type="button" onclick="closeModal(3)">Cancel</button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>