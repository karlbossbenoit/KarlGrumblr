<?php
session_start();
ob_start();

$username = $_POST['user']; 
$userpass= $_POST['pass'];
//$email = $_POST['email'];
//echo "[user: ".$username."] - ["."pass: ".$_POST['pass']."]";
$namequery =  $db->query("SELECT * FROM user_information WHERE user_name='$username'");
//$nameassoc = $namequery->fetch_assoc();

//$rowamount = $namequery->num_rows;
//echo $rowamount; 
//print_r($namequery);
if ( $namequery->num_rows> 0 ){ // User doesn't exist
    //$_SESSION['message'] = "User with that email doesn't exist!";
    //echo"User Name is within db, therfore correct";
    //header('location: registerpage.php');
    //ob_end_clean();
    //header("location: error.php");

    $passarray= $namequery->fetch_assoc();
	//echo $passarray['user_name'];
	if ( $_POST['pass'] == $passarray['user_password'])  {

		$_SESSION['userid'] = $passarray['user_id'];
		$_SESSION['login'] = $username;
		$_SESSION['pass'] =$userpass;
		$_SESSION['email']= $passarray['user_email'];
		//$_SESSION['active'] = 1;
		$setactive =  $db->query("UPDATE user_information SET active=1 WHERE user_name='$username'");
		//echo'that password match you loggined in MY NIGGAH YUH YUH';
		header("location: profile.php");
		//echo"PASSWORD MATCHES AND user also :P";
	}else{echo"- [username or password incorrect]";}
}
else{
	header('location: registerpage.php');
    //ob_end_clean();
    //header("location: error.php");

	}
?>