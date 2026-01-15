<?php
require 'connection.php';

$sql 

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <?php 
        include_once 'header.php'; 
        include_once 'fonts.php';  
    ?>
    <link rel="stylesheet" href="../style/timetable.css">

    
</head>
<body>

    <div class="cont">

        <div class="intro">

            <h1>WEEKLY TIMETABLE</h1>

            <div class="intro-child">

                <p>Plan your training week.</p>

                <button name="print" value="print"><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#e3e3e3"><path d="M658-648v-132H302v132h-60v-192h476v192h-60Zm-518 60h680-680Zm599 95q12 0 21-9t9-21q0-12-9-21t-21-9q-12 0-21 9t-9 21q0 12 9 21t21 9Zm-81 313v-192H302v192h356Zm60 60H242v-176H80v-246q0-45.05 30.5-75.53Q141-648 186-648h588q45.05 0 75.53 30.47Q880-587.05 880-542v246H718v176Zm102-236v-186.21Q820-562 806.78-575q-13.23-13-32.78-13H186q-19.55 0-32.77 13.22Q140-561.55 140-542v186h102v-76h476v76h102Z"/></svg>Print Schedule</button>

            </div>

            <div class="overflow-x-auto custom-scroll pb-4">
                    <table>
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-400 text-sm divide-y divide-slate-800 bg-slate-900/50" id="schedule-body">
                            <?php

                            $sql = "SELECT * FROM time_table;";
                            $result = mysqli_query($con, $sql);

                            $resultFetched = mysqli_fetch_all($result, MYSQLI_ASSOC);

                            // print_r($resultFetched);
                            foreach ($resultFetched as $time) {
                                echo '<tr>';

                                echo '
                                        <td class="wider">'.$time['time'].'</td>
                                        <td>'.$time['monday'].'</td>
                                        <td>'.$time['tuesday'].'</td>
                                        <td>'.$time['wednesday'].'</td>
                                        <td>'.$time['thursday'].'</td>
                                        <td>'.$time['friday'].'</td>
                                        <td>'.$time['saturday'].'</td>
                                        <td>'.$time['sunday'].'</td>
                                ';
                            }


                            // foreach ($resultFetched as $time) {
                            //     echo '
                            //         <td>'.$time['class_id'].'</td>
                            //     ';
                            // }
                            
                            ?>
                        </tbody>
                    </table>
                </div>

        </div>
        
    </div>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php include 'footer.php'?>

    
</body>
</html>