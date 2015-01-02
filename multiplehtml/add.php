<?php
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

$full_name = $_POST['full_name'];

$hobby='';
if(array_key_exists('hobby_gardening', $_POST) && !empty($_POST['hobby_gardening'])){
    $hobby .= $_POST['hobby_gardening'].',';
}

if(array_key_exists('hobby_reading', $_POST) && !empty($_POST['hobby_reading'])){
    $hobby .= $_POST['hobby_reading'].',';
}

if(array_key_exists('hobby_dancing', $_POST) && !empty($_POST['hobby_dancing'])){
    $hobby .= $_POST['hobby_dancing'].',';
}

if(array_key_exists('hobby_singing', $_POST) && !empty($_POST['hobby_singing'])){
    $hobby .= $_POST['hobby_singing'].',';
}

//echo $hobby;

$hobby_trimmed = rtrim($hobby, ",");

//var_dump($hobby_trimmed);

echo "</br>";

$favorite_food = implode(",", $_POST['favorite_food']);

//echo $favorite_food;

echo "</br>";

$cities = implode(",", $_POST['cities']);

//echo $cities;

//current_timestamp;


$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "INSERT INTO `ftfl2nd`.`multiple`(`full_name`, `hobby`, `preferred_location`, `created`, `modified`)
                                VALUES ('$full_name', '$hobby_trimmed', '$cities', current_timestamp, current_timestamp)";

mysqli_query($link, $query);


header('location:list.php');
?>
