<?php

$id = $_GET['id'];
$link = mysqli_connect("localhost",
"root",
"lict@2",
"personal_info");

$query = "DELETE FROM `students`.`users` WHERE `users`.`id` = $id";
mysqli_query($link, $query);

header('location:list.php');


?>
