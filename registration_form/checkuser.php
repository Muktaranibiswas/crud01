<?php



    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];

    if($password1 != $password2)
        header('Location: registration.html');

    if(strlen($username) > 30)
        header('Location: registration.html');







echo '<pre>';
print_r($_POST);
echo'</pre>';

$email = $_POST['email'];
$username='';
if(isset($_POST['username']) && !empty($_POST['username'])){
    $username.=$_POST['username'].',';
}
if(isset($_POST['password']) && !empty($_POST['password'])){
$password.=$_POST['password'].',';
}

//$a=trim($food,',');
$link = mysqli_connect("localhost","root","lict@2","registration_form");

$query ="INSERT INTO `registration_form`.`users` (

`name` ,
`username` ,
`email` ,
`password` ,
`created` ,
`modified`
)
VALUES ('$name', '$username', '$email', '$password', NOW( ) , NOW( ));";
mysqli_query($link, $query);
?>
<a href="login.php">Go Back</a>

