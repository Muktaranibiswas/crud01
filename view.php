<?php
$code = $_GET['code'];
$link = mysqli_connect("localhost", "root", "lict@2", "students_info_form");
$query = "SELECT * FROM users WHERE code = $code";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<html>
<head>
    <title></title>
</head>
<body style="text-align: Left;">
<ul>
    <li><a href="add.html">Create New Record</a> </li>
    <li><a href="add.php">View All Participant</a> </li>
    <li><a href="search.php">Search By ID</a> </li>
</ul>
<table border="1">
    <tr>
        <td>Code</td>
        <td>Track</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Father's Name</td>
        <td>Mother's Name</td>
        <td>Religion</td>
        <td>Date of Birth</td>
        <td>Gender</td>
        <td>Nationality</td>
        <td>National ID</td>
        <td>Passport</td>
        <td>Present Address</td>
        <td>Permanent Address</td>
        <td>Email</td>
        <td>Alternate Email</td>
        <td>Contact Number</td>
        <td>S.S.C Institute</td>
        <td>S.S.C Roll</td>
        <td>S.S.C result</td>
        <td>S.S.C Passing Year</td>
        <td>S.S.C Board</td>
        <td>H.S.C Institute</td>
        <td>H.S.C Roll</td>
        <td>H.S.C Result</td>
        <td>Passing Year</td>
        <td>H.S.C Board</td>
        <td>Bachelor Degree</td>
        <td>BSC Institute</td>
        <td>BSC Result</td>
        <td>Passing Year</td>


        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['code']?></td>
            <td><?php echo $row['track']?></td>
            <td><?php echo $row['firstname']?></td>
            <td><?php echo $row['lastname']?></td>
            <td><?php echo $row['fathersname']?></td>
            <td><?php echo $row['mothersname']?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['dateofbirth']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['nationality']?></td>
            <td><?php echo $row['nationalid']?></td>
            <td><?php echo $row['passport']?></td>
            <td><?php echo $row['presentaddress']?></td>
            <td><?php echo $row['permanentaddress']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['alternateemail']?></td>
            <td><?php echo $row['contactnumber']?></td>
            <td><?php echo $row['sscinstitute']?></td>
            <td><?php echo $row['sscroll']?></td>
            <td><?php echo $row['sscresult']?></td>
            <td><?php echo $row['sscyear']?></td>
            <td><?php echo $row['sscboard']?></td>
            <td><?php echo $row['hscinstitute']?></td>
            <td><?php echo $row['hscroll']?></td>
            <td><?php echo $row['hscresult']?></td>
            <td><?php echo $row['hscyear']?></td>
            <td><?php echo $row['hscboard']?></td>
            <td><?php echo $row['bachelordegree']?></td>
            <td><?php echo $row['bscnstitute']?></td>
            <td><?php echo $row['hscroll']?></td>
            <td><?php echo $row['bscresult']?></td>
            <td><?php echo $row['bscyear']?></td>


            <td> <a href="#">Edit</a> | <a href="delete.php?code=<?php echo $row['code']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>