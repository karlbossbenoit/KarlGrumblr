<?php

require 'db.php';
session_start();
$newpass = $_POST['pass'];
$newuser = $_POST['user'];
$username = $_SESSION['login'];

$changepass= $db->query("UPDATE user_information SET user_password='$newpass' WHERE user_name ='$username' ");
//$changepass = 
//$chaneresult = $changepass


?>