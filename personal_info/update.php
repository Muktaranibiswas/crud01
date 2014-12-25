<?php

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "personal_info");

$query = "UPDATE `personal_info`.`crud` SET `fullname` = '".$fullname."'
WHERE `crud`.`id` = $id;";

mysqli_query($link, $query);
header('location:list.php');