


<?php
//print_r($_REQUEST);
$fullname = $_POST['fullname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$nationality = $_POST['nationality'];
$nationalid = $_POST['nationalid'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$link = mysqli_connect("localhost","root","lict@2","personal_info");

$query = "INSERT INTO `personal_info`.`crud` (`fullname`, `fname`, `mname`, `nationality`, `nationalid`, `email`, `mobile`)
VALUES ('$fullname', '$fname', '$mname', '$nationality', '$nationalid', '$email', '$mobile')";
//echo $query;
mysqli_query($link, $query);
?>
<a href="create.html">Go Back</a>


































