<?php

require 'db.php';
session_start();
//echo"YOUR IN INVITES";


$username = $_SESSION['login'];
//echo $username;
//echo $username;
$invitequery= $db->query("SELECT user_inviting, invite_code, chat_name FROM invite WHERE user_invited='$username' " );
//$checkcode =$db->query("SELECT  invite_code FROM invite WHERE user_invited='$username' " );

//print_r($invitequery);
//$inviteresult= $invitequery->fetch_assoc();
//print_r($inviteresult);
if($invitequery->num_rows== 0){
	echo"you have 0 invitations";

}
while($inviteresult= $invitequery->fetch_assoc()){
	//echo"nothigns here";
	$userinviting = $inviteresult['user_inviting'];
	echo "Person inviting you: ".$inviteresult['user_inviting']."</br>";
	echo "Their invite Code: ".$inviteresult['invite_code']."</br>";
	$checkagain = $db->query("SELECT * FROM user_information WHERE user_name='$userinviting' ");
	$checkresult= $checkagain->fetch_assoc();
	$actvity = $checkresult['active'];
	if($actvity!=1){
		echo"User isn't currently active"."</br></br>";

	}else{
		echo"That user is active click here to go to:";
		echo "<a href='chatroom.php'>CHATROOM</a></br></br>";
		
	}

}


//echo: 

//echo

?>