<?php
$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact_info");

$query = "select * from crud WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Present Address</td>
        <td>Permanent Address</td>
        <td>District</td>
        <td>Home Phone</td>
        <td>Mobile</td>
        <td>Emergency Contact</td>
        <td>Email</td>
        <td>Alternate Emai</td>

        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['padd']?></td>
        <td><?php echo $row['peradd']?></td>
        <td><?php echo $row['district']?></td>
        <td><?php echo $row['hphone']?></td>
        <td><?php echo $row['mobile']?></td>
        <td><?php echo $row['econtact']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['aemail']?></td>
        <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
            <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href="list.php">Go to Home</a>