<?php 
	require 'db.php';
	session_start();
	//if(!isset($_SESSION['chatid'])){echo "the session is not set";}

	$username = $_SESSION['login'];
	$chatid = $_SESSION['chatid'];
	$userid = $_SESSION['userid'];

	//echo $chatid."<br>";
	//echo $username."<br>";

	if(isset($_POST['done'])){
		$msg=$_POST['message'];
		$chatinsert= $db->query("INSERT INTO chat_messages (user_name, message,chat_id,user_id) VALUES ('$username', '$msg','$chatid','$userid')");
		exit();

		}


?>