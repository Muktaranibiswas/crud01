<?php


//echo "Hello";

session_start();

if(array_key_exists('loggedin',$_SESSION))
{
    echo "You are on dashboard";
}

else
{
    echo header('location:home.php');
}

?>
<br>
<a href="logout.php">Logout </a>