<?php

$email = $_POST['email'];

$link = mysqli_connect("localhost","root","lict@2","crud");

$query = "INSERT INTO `crud`.`emails` (
`id` ,
`email` ,
`created`
)
VALUES (
'', '$_POST[email]',  NOW( )
);
";

mysqli_query($link, $query);

//echo $query;
?>

<a href="create_email.php">Go Back</a>

