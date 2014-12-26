<?php

$id = $_POST['id'];
$padd = $_POST['padd'];
$peradd = $_POST['peradd'];
$district = $_POST['district'];
$hphone = $_POST['hphone'];
$mobile = $_POST['mobile'];
$econtact = $_POST['econtact'];
$email = $_POST['email'];
$aemail = $_POST['aemail'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact_info");

$query = "UPDATE `contact_info`.`crud` SET `padd` = '".$padd."',

                                           `peradd` = '".$peradd."',
                                           `district` = '".$district."',
                                           `hphone` = '".$hphone."',
                                           `mobile` = '".$mobile."',

                                           `econtact` = '".$econtact."',
                                           `email` = '".$email."',

                                           `aemail` = '".$aemail."'
WHERE `crud`.`id` = $id;";

mysqli_query($link, $query);


header('location:list.php');

?>