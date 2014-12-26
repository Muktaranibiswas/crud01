<?php

$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact_info");

$query = "DELETE FROM `contact_info`.`crud` WHERE `crud`.`id` = $id";
mysqli_query($link, $query);

header('location:list.php');


?>
