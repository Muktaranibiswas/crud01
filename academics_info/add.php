
<?php
print_r($_REQUEST);
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

$link = mysqli_connect("localhost","root","lict@2","academics_info");


$query = "INSERT INTO `academics_info`.`crud` (`loeducation`, `etitle`, `group`, `institution`, `rtype`, `result`, `scale`, `pyear`, `duration`, `achievement`)
VALUES ('$loeducation', '$etitle', '$group', '$institution', '$rtype', '$result', '$scale', '$pyear', '$duration', '$achievement')";
//echo $query;
mysqli_query($link, $query);
?>

<a href="create.html">Go Back</a>



