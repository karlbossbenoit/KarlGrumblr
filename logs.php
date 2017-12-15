<?php
require 'db.php';
session_start();
$chatid = $_SESSION['chatid'];
$username =$_SESSION['login'];

//$con = mysql_connect('localhost','root','');
//mysql_select_db('chatbox', $con);

$chatquery=$db->query("SELECT * FROM chat_messages WHERE chat_id='$chatid' ORDER BY message_id DESC LIMIT 7");
//echo "You are in logs.php";
//$chatresult=$chatquery->fetch_assoc();
while($chatresult=$chatquery->fetch_assoc()){
	
	//echo "Its not your Username";
	echo "<div class='w3-left-align' ><i class='w3-right fa fa-male '></i>".$chatresult['user_name'].": ".$chatresult['message']."</div><br>";
	
}
//}

?>