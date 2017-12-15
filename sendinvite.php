<?php
ob_start();
require 'db.php';
session_start();

$userinviting=$_SESSION['login'];
$invitename=$_POST['invitname'];
$_SESSION['chatcode']=$_POST['chatcode'];
$chatcode =$_POST['chatcode'];
$chatname=$_POST['chatname'];

//die();
$checkuserexist=$db->query("SELECT * FROM user_information WHERE user_name='$invitename' ");

$checkuser= $db->query("SELECT * FROM user_information WHERE user_name='$userinviting' ");
$userresult=$checkuser->fetch_assoc();


$checkcodeexist=$db->query("SELECT * FROM invite WHERE invite_code='$chatcode' ");

if($checkcodeexist->num_rows>0){
	echo "That code already exists pick a new one";}

elseif($checkuserexist -> num_rows==0){
	echo "That user does not exist";}

elseif($userresult['user_name']==$invitename){
	echo "That user is yourself pick a different user";}

else{
//$query = $db ->query("INSERT INTO invite (user_inviting) VALUES('hello')");
//echo "insert done well";
//var_dump($)

//echo"your in the else statement";
$query = $db ->query("INSERT INTO invite(user_inviting,user_invited,invite_code,chat_name) 
VALUES('$userinviting','$invitename','$chatcode','$chatname')");

$checkquery = $db->query("SELECT * FROM invite WHERE user_inviting = '$userinviting' AND invite_code='$chatcode' ");
$checkresult = $checkquery->fetch_assoc();
echo $checkresult['user_inviting'];
//die();
header('location: profile.php');
//var_dump($checkquery);

}
?>