<?php

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");
$query = "UPDATE `students`.`users` SET `first_name` = '".$firstName."',
`last_name` = '".$lastName ."' WHERE `users`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');