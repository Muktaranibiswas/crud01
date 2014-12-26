
<?php
//print_r($_REQUEST);
$padd = $_POST['padd'];
$peradd = $_POST['peradd'];
$district = $_POST['district'];
$hphone = $_POST['hphone'];
$mobile = $_POST['mobile'];
$econtact = $_POST['econtact'];
$email = $_POST['email'];
$aemail = $_POST['aemail'];

$link = mysqli_connect("localhost","root","lict@2","contact_info");

$query = "INSERT INTO `contact_info`.`crud` (`padd`, `peradd`, `district`, `hphone`, `mobile`, `econtact`, `email`, `aemail`)
VALUES ('$padd', '$peradd', '$district', '$hphone', '$mobile', '$econtact', '$email', '$aemail')";
//echo $query;
mysqli_query($link, $query);
?>

<a href="create.html">Go Back</a>


