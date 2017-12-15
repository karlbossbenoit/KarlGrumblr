<?php
require 'db.php';
session_start();
ob_start();
//die();
echo"your in connectchat.php.<br>";
//require 'db.php';
//sesion_start();
$username= $_SESSION['login'];
$code= $_POST['chatcode'];
echo $username."<br>";
echo $code."<br>";

$query= $db->query("SELECT * FROM invite WHERE invite_code = '$code'");
if($query->num_rows==0){
	echo"Try a different code the you inputed isn't in the database";

}
else{
	$result = $query->fetch_assoc();
	$_SESSION['inviting_user']=$result['user_inviting'];
	$_SESSION['invited_user']=$result['user_invited'];
	$_SESSION['chatid']=$result['chat_id'];
	echo $result['chat_id'];
	//echo" you can enter chatroom";
	//echo"<a href='chatroom.php'>Enter Chatroom</a>";
	header('location: chatroom.php');
}

//=$query->fetch_assoc();*/
//echo "<br/>"."inviting user is:".$_SESSION['inviting_user'];

?>