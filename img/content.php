
<?php
$link = mysqli_connect('localhost','root','lict@2','image');

$query = "select * from photo";

$result = mysqli_query($link, $query);


?>

<table border="1" width="100%">

<tr>
    <td>Id</td>
    <td>name</td>
    <td>url</td>
    </tr>
<?php
foreach($result as $row){
?>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['url']?></td>

    <td> <a href="view.php?id=<?php echo $row['id']?>">View</a> |<a href="edit_info.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete_info.php?id=<?php echo $row['id']?>">Delete</a></td>
</tr>

<?php
}
?>

