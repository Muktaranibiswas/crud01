<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact_info");

$query = "select * from crud WHERE id = $id";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Present Address:</label>
    <input type="text" name="padd" value="<?php echo $row['padd'];?>" />

    <label>Permanent Address:</label>
    <input type="text" name="peradd" value="<?php echo $row['peradd'];?>" />

    <label>District:</label>
    <input type="text" name="district" value="<?php echo $row['district'];?>" />

    <label>Home Phone:</label>
    <input type="text" name="hphone" value="<?php echo $row['hphone'];?>" />


    <label>Mobile:</label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" />

    <label>Emergency Contact</label>
    <input type="text" name="econtact" value="<?php echo $row['econtact'];?>" />


    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />

    <label>Alternate Email:</label>
    <input type="text" name="aemail" value="<?php echo $row['aemail'];?>" />



    <button type="submit">Save</button>
</form>
