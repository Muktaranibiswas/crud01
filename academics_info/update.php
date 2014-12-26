<?php
print_r($_POST):

$id = $_GET['id'];
$loeducation = $_POST['loeducation'];
$etitle = $_POST['etitle'];
$group = $_POST['group'];
$institution = $_POST['institution'];
$rtype = $_POST['rtype'];
$result = $_POST['result'];
$scale = $_POST['scale'];
$pyear = $_POST['pyear'];
$duration = $_POST['duration'];
$achievement = $_POST['achievement'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academics_info");

$query = "UPDATE `academics_info`.`crud` SET `loeducation` = '".$loeducation."',

                                           `etitle` = '".$etitle."',
                                           `group` = '".$group."',
                                           `institution` = '".$institution."',
                                           `rtype` = '".$rtype."',

                                           `result` = '".$result."',
                                           `scale` = '".$scale."',

                                           `pyear` = '".$pyear."',
                                           `duration` = '".$duration."',

                                           `achievement` = '".$achievement."'

WHERE `crud`.`id` = $id;";

mysqli_query($link, $query);


//header('location:list.php');

?>