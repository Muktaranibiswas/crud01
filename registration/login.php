<?php

session_start();
if(isset($_session['invaliduser']))echo $_SESSION['massage'];
if(isset($_session['invalidpassword']))echo $_SESSION['massage'];
session_unset();
?>
<html>
<body>
<form action="checkuser.php"method = 'POST'>
    <h3><B>Log Information:</B></h3>


    <label>User Name :</label>
    <input type ="text" name = "username">
    <br /><br />

    <label>Password:</label>
    <input type ="password" name = "password">
    <br /><br />

    <button type = "submit" name = "submit">Save</button>

    <html>
    <body>
</form>

<a href="dashboard.php">Go to dashboard</a>
