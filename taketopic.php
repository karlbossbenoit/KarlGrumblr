<?php
require 'db.php';
session_start();
$username= $_SESSION['login'];

$familyquery = $db->query("SELECT * FROM family_life WHERE user_name ='$username'  ");
if($familyquery->num_rows>0){

	$topic1= "family life";
}
$workquery = $db->query("SELECT * FROM working WHERE user_name ='$username'  ");
if($workquery->num_rows>0){

	$topic2= "work life";
}
$schoolquery = $db->query("SELECT * FROM school WHERE user_name ='$username'  ");
if($schoolquery->num_rows>0){

	$topic3= "school life";
}

echo $topic1."</br>".$topic2."</br>".$topic3."</br>";

?>