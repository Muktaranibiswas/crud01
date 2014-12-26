<?php
$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academics_info");

$query = "select * from crud WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>

<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>Level of Education</td>
        <td> Exam Title</td>
        <td>Group</td>
        <td>Institution</td>
        <td>Result Type </td>
        <td>Result</td>
        <td>Scale</td>
        <td>Passing Year</td>
        <td>Duration</td>
        <td> Achievement</td>


        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['loeducation']?></td>
            <td><?php echo $row['etitle']?></td>
            <td><?php echo $row['group']?></td>
            <td><?php echo $row['institution']?></td>
            <td><?php echo $row['rtype']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['scale']?></td>
            <td><?php echo $row['pyear']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['achievement']?></td>

            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
<a href="list.php">Go to Home</a>