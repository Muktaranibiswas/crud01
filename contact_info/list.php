<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact_info");

$query = "select * from crud;";
$result = mysqli_query($link, $query);

?>
<ul>
    <li><a href="create.html">Create New</a> </li>
</ul>
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
        <td>Gender</td>

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
            <td><?php echo $row['gender']?></td>

            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>

            </td>
        </tr>
    <?php
    }
    ?>
</table>
