<?php

$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academics_info");

$query = "DELETE FROM `academics_info`.`crud` WHERE `crud`.`id` = $id";
mysqli_query($link, $query);

header('location:list.php');


?>
