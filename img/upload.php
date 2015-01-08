<?php
 $name=$_FILES['file']['name'];
 
 $tmp_name=$_FILES['file']['tmp_name'];
 $location='image/';
$url = $location.$name;


	
 if (move_uploaded_file($tmp_name,$location.$name)) {
     $link = mysqli_connect('localhost','root','lict@2','image');
     $query = "INSERT into photo(url) values('$url')";
#var_dump($query); die();
    if(mysqli_query($link, $query)){ echo 'Photo update successfuly';}

	 } else {
		echo "choose a file";
	}

header('location:content.php');
?>
