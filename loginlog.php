<?php 

require 'db.php';
session_start();
$chatid = $_SESSION['chatid'];
$username = $_SESSION['login'];
$_SESSION['count']+= 1;

$chatquery=$db->query("SELECT * FROM chat_messages WHERE chat_id='$chatid' AND user_name='$username' ORDER BY message_id DESC LIMIT 1");
$chatresult=$chatquery->fetch_assoc();
$msg = $chatresult['message'];

// $chatupdate=$db->query("UPDATE chat_messages SET sent=1, unsent=0  WHERE chat_id='$chatid' AND user_name='$username' AND message_id='$msgid' ");

// $updatequery=$db->query("SELECT * FROM chat_messages WHERE chat_id='$chatid' AND user_name='$username' AND message_id='$msgid' ORDER BY message_id DESC LIMIT 1");
// $updateresult= $updatequery->fetch_assoc(); 

// if($updateresult['sent']==1){
// 	echo $chatresult['message'];
// }

//$_SESSION['div']= "<li class='other'><div class='avatar'><img src='https://i.imgur.com/DY6gND0.png' draggable='false'/></div><div class='msg' id='chatboxing'>";
$_SESSION['themsg']=$username.":  ".$msg;
echo "<li class='other'><div class='avatar'><img src='https://i.imgur.com/DY6gND0.png' draggable='false'/></div><div class='msg' id='chatboxing'><time>20:18</time>
      "; 

//$_SESSION['themsg']=$username.":  ".$msg;
echo $username.":  ".$msg."</div></li>";

	


?>
<!-- <script type="text/javascript">
	$(document).ready(function(){

		$("#dvMain").append("<li class='other'><div class='avatar'><img src='https://i.imgur.com/DY6gND0.png' draggable='false'/></div><div class='msg' id='chatboxing'><time>20:17</time></div></li>");


	});
</script> -->
