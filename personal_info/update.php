<?php

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$nationality = $_POST['nationality'];
$nationalid = $_POST['nationalid'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$track = $_POST['track'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "personal_info");

$query = "UPDATE `personal_info`.`crud` SET `fullname` = '".$fullname."',
                                             `fname` = '".$fname."',
                                           `mname` = '".$mname."',
                                           `nationality` = '".$nationality."',
                                           `nationalid` = '".$nationalid."',

                                           `email` = '".$email."',
                                           `mobile` = '".$mobile."',

                                           `track` = '".$track."'






WHERE `crud`.`id` = $id;";


mysqli_query($link, $query);

header('location:list.php');
?>