<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "personal_info");

$query = "select * from crud;";
$result = mysqli_query($link, $query);

?>
<ul>
    <li><a href="create.html">Create New</a> </li>
</ul>
<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>Full Name</td>
        <td>Father's Name</td>
        <td>Mather's Name</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['fullname']?></td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['mname']?></td>
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
