<?php

require 'db.php';
session_start();
$username = $_SESSION['login'];
$query = $db->query("SELECT * FROM user_information WHERE user_name = '$usename'");
$result = $query->fetch_assoc();
//echo $username;

 $userid = $result['user_id'];
 $chatquery= $db->query("SELECT * FROM invite WHERE user_inviting='$username' OR user_invited ='$username'  ");
 $chatresult = $chatquery->fetch_assoc();
//echo $chatresult['chat_name'];
 while($chatresult = $chatquery->fetch_assoc()){

 	echo  "chat name: ".$chatresult['chat_name']."</br> chat id: ".$chatresult['chat_id']."</br> invite code: ".$chatresult['invite_code']."</br></br>";
 }

?>