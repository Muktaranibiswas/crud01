
<?php
$fullname = $_POST['fullname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "personal_info");



$query = "INSERT INTO 'personal_info'.'crud' (
'id' ,
'fullname' ,
'fname' ,
'mname'
)
VALUES (
'', '$_POST[$fullname]', '$_POST[$fname]', '$_POST[$mname]');";

mysqli_query($link, $query);



header('location:list.php');


?>

