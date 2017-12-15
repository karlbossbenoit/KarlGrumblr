<?php
ob_start();
echo $_POST['newuser'];
//SETS variables equal to the username & passwords submitted\\
$newuser = $_POST['newuser'];
$setemail=$_POST['setemail'];
$setpass = $_POST['setpass'];
//<!--query checks to see if their are existing users with the submited username request-->\\
$usercheck =$db->query("SELECT * FROM user_information WHERE user_name ='$newuser'");
$ifexists = $usercheck->fetch_assoc();
//echo $ifexists['user_name'];//
if($usercheck->num_rows != 0){
	echo"username already in use select another";
	//die();

}else{

	$createuser = $db->query("INSERT INTO user_information(user_name,user_password,user_email) VALUES ('$newuser','$setpass','$setemail' )");
	$checkuseragain = $db->query("SELECT * FROM user_information WHERE user_name ='$newuser'");
	$getrow= $checkuseragain->fetch_assoc();
	$userid= $getrow['user_id'];
	$username= $getrow['user_name'];
	$points= 0;


	$insert_topicfamily= $db->query("INSERT INTO family_life(user_id,user_name,user_points) VALUES ('$userid','$username','$points' )");
	$insert_topicworking= $db->query("INSERT INTO working(user_id, user_name,user_points) VALUES ('$userid','$username','$points' )");
	$insert_topicschool= $db->query("INSERT INTO school(user_id, user_name,user_points) VALUES ('$userid','$username','$points' )");
	//$insert_topicschool = $db->query("INSERT INTO user_information(user_name,user_password) VALUES ('$newuser','$setpass' )");

	header("location: loginpage.php");
	
	//<!-- TEST THE CONNECTION TO SEE IF THE USERS ARE BEING ADD TO THE DATABASE-->
	//$ifexistsagain = $checkuseragain->fetch_assoc();
	//echo "username: ".$ifexistsagain['user_name']."  password: ".$ifexistsagain['user_password'];

}

// "INSERT INTO family_life(user_id,user_name,user_points,user_percent,company_points,company_percent,time_spent_in_cat,bi_weekly_freq,total_freq,total_percent) VALUES ('$userid','$username','$points','$points','$points','$points','$points','$points','$points','$points')");
// u

?>