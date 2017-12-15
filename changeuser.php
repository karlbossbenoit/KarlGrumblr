<?php
require 'db.php';
session_start();
$username = $_SESSION['login'];


$newuser = $_POST['user'];
$idquery = $db->query("SELECT * FROM user_information WHERE user_name ='$username' ");
$idresult = $idquery->fetch_assoc();
$userid = $idresult['user_id'];

$changeuserquery = $db->query("UPDATE user_information SET user_name ='$newuser' WHERE user_id='$userid'");
header('location: logout.php');

?>