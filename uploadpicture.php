<?php
require"db.php";
session_start();
$username = $_SESSION['login'];
$userid= $_SESSION['userid'];

$file=$_FILES['file'];
#
$fileName= $_FILES['file']['name'];
$fileSize= $_FILES['file']['size'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed=array('jpg','jpeg','png');

if (in_array($fileActualExt, $allowed)){
	if($fileError === 0 ){
		if($fileSize <=pow(10,8)){
			$fileNewName = uniqid('',true).".".$fileActualExt;
			$fileDestination = "images/".$fileNewName;
			move_uploaded_file($fileTmpName, $fileDestination);
			header("location: profile.php?upload=success;");
			$sql = "INSERT INTO profile_img(user_id, user_name, image) VALUES('$userid','$username','$fileNewName')";
			$insert = $db->query($sql);

		}else{
			echo "your file is to big";
		}

	}else{
		echo "There was an error uploading your file";
	}
}else{
	echo"you cannot upload this file type";
}

?>