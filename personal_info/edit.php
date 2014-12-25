<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "personal_info");
$query = "select * from crud WHERE id = $id";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Full Name:</label>
    <input type="text" name="fullname" value="<?php echo $row['fullname'];?>" />


    <button type="submit">Save</button>
</form>
