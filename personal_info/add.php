


<?php
//print_r($_REQUEST);
$fullname = $_POST['fullname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$link = mysqli_connect("localhost","root","lict@2","personal_info");

$query = "INSERT INTO `personal_info`.`crud` (`fullname`, `fname`, `mname`)
VALUES ('$fullname', '$fname', '$mname')";
//echo $query;
mysqli_query($link, $query);
?>
<a href="create.html">Go Back</a>


































