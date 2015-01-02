<?php

$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "SELECT * FROM multiple";

$result = mysqli_query($link, $query);

?>


<html>
<head>
    <title></title>
</head>

<body style="text-align: center;">

<ul>
    <li><a href="add.html">Create New Record</a> </li>
    <li><a href="all.php">View All Participant</a> </li>
</ul>


<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Full Name</td>
        <td>Hobby</td>
        <td>Preferred Job Location</td>

        <td>Created</td>
        <td>Modified</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['full_name']?></td>
            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['preferred_location']?></td>

            <td><?php echo $row['created']?></td>
            <td><?php echo $row['modified']?></td>

            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a>
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
            </td>
        </tr>

    <?php
    }
    ?>

</table>

</body>
</html>
