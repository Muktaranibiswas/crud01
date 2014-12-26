<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academics_info");

$query = "select * from crud WHERE id = $id";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label> Level of Education </label>
    <select name = "loeducation">
        <option <?php if ($row ['loeducation']== "Diploma") echo 'selected'; ?> value="Diploma">Diploma</option>
        <option <?php if ($row ['loeducation']== "Bachelar") echo 'selected'; ?> value="Bachelar">Bachelar</option>
        <option <?php if ($row ['loeducation']== "Masters") echo 'selected'; ?> value="Masters">Masters</option>
        <option <?php if ($row ['loeducation']== "Doctoral") echo 'selected'; ?> value="Doctoral">Doctoral</option>

    </select>



    <label>Exam Title:</label>
    <input type="text" name="etitle" value="<?php echo $row['etitle'];?>" />


    <label>Group:</label>
    <input type="text" name="group" value="<?php echo $row['group'];?>" />

    <label>Institution</label>
    <input type="text" name="institution" value="<?php echo $row['institution'];?>" />


    <label>Result Type:</label>
    <input type="text" name="rtype" value="<?php echo $row['rtype'];?>" />

    <label>Result:</label>
    <input type="text" name="result" value="<?php echo $row['result'];?>" />
    <br>

    <label>Scale:</label>
    <input type="text" name="Scale" value="<?php echo $row['Scale'];?>" />
    <br>

    <label>Passing Year:</label>
    <input type="text" name="pyear" value="<?php echo $row['pyear'];?>" />
    <br>

    <label>Duration:</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" />
    <br>
    <label>Achievement:</label>
    <input type="text" name="achievement" value="<?php echo $row['achievement'];?>" />
    <br>



    <button type="submit">Save</button>
</form>
</html>
