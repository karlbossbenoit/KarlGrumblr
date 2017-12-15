<?php

require 'db.php';
session_start();
$newemail = $_POST['email'];
//$newuser = $_POST['user'];
$username = $_SESSION['login'];

$changepass= $db->query("UPDATE user_information SET user_email='$newemail' WHERE user_name ='$username' ");
//$changepass = 
//$chaneresult = $changepass


?>