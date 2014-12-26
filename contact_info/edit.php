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
    <textarea name="padd"><?php echo $row['padd'];?></textarea>

    <label>Permanent Address:</label>
    <textarea name="peradd"><?php echo $row['peradd'];?></textarea>

    <label>District:</label>


    <select name = "district">
        <option <?php if ($row ['district']== "dhaka") echo 'selected'; ?> value="dhaka">Dhaka</option>
        <option <?php if ($row ['district']== "barisal") echo 'selected'; ?> value="barisal">Barisal</option>
        <option <?php if ($row ['district']== "sylhet") echo 'selected'; ?> value="sylhet">Sylhet</option>
        <option <?php if ($row ['district']== "rajshashi") echo 'selected'; ?> value="rajshashi">Rajshashi</option>
        <option <?php if ($row ['district']== "khulna") echo 'selected'; ?> value="khulna">Khulna</option>
        <option <?php if ($row ['district']== "chittagong") echo 'selected'; ?> value="chittagong">Chittagong</option>
        <option <?php if ($row ['district']== "comilla") echo 'selected'; ?> value="comilla">Comilla</option>
    </select>



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
    <br>

    <label>Gender:</label>

    <input type="radio" name="gender"<?php if ($row['gender']== "Male") echo 'checked';?> value= "Male" />Male
    <input type="radio" name="gender"<?php if ($row['gender']== "Female") echo 'checked';?> value= "Female" />Female

    <button type="submit">Save</button>
</form>
</html>
