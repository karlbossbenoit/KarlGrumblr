<?php

require 'db.php';
session_start();
$username = $_SESSION['login'];
$userid = $_SESSION['userid'];

$sql = "SELECT * FROM profile_img WHERE user_id = '$userid' AND user_name = '$username' ";
$querying = $db->query($sql);

$result = $querying->fetch_assoc();
//echo " hello"."\n";
//echo $result['image']."\n";

$_SESSION['piclink']= "images/".$result['image'];
$_SESSION['school_peg'] =   ;
$_SESSION['work_peg'] =   ;
$_SESSION['family_peg'] =   ;
$_SESSION['couple_peg'] =   ;
$_SESSION[''] =   ;

?>