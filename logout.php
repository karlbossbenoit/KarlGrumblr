<?php
	ob_start();
	require 'db.php';
	session_start();
	$logoutname = $_SESSION['login'];
	
	$removeactive = $db->query("UPDATE user_information SET active=0 WHERE user_name='$logoutname'");

	session_destroy();
	header('location: loginpage.php');


	//<!-->			THIS	TESTS 		IF      ACTIVE    UPDATES<--\\
	//$queryupdate = $db->query("SELECT * FROM user_information WHERE active=5");
	//$testupdate = $queryupdate->fetch_assoc();
	//echo $testupdate['user_name'];
?>