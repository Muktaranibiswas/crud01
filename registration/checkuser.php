<?php
//print_r($_POST);
/*print_r($_SERVER['REQUEST_METHOD']);
session_start();
$_SESSION['loggedin']= true;

//header('location:dashboard.php');
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('location:login.php');
}
else {
   header('location:dashboard.php');
}
header('location:login.php');*/
//var_dump($username,$$password);

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($username)&&empty($username)) {
    $_SESSION['invaliduser']="Invalid username";
    header('location:login.php');
}
if (isset($password)&&empty($password)) {
    $_SESSION['invalidpassword']="Invalid password";
    header('location:login.php');
}
$link = mysqli_connect("localhost","root","lict@2","registration");

$query ="INSERT INTO `registration`.`user` (
`username` ,
`password`
)
VALUES ('$username', '$password');";
$sql = "select * from user where username = $username AND password = $password";
$row = mysqli_query(query);

if ($row) {
    //Put data into session
    //Redirect to Dashboard

}
else{
    //Redirect to login
}

?>