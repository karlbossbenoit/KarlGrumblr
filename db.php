<?php
//echo"at lest your at the page";
$dbhost='localhost';
$dbname='Grumblr';
$dbuser='root';
$dbpass='root';

$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// Check connection
/*if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{echo"your in the db";}*/


// $c = mysql_connect("localhost", "user", "password");
// mysql_select_db("database");
// $result = mysql_query("SELECT * FROM user_information");
// $row = mysql_fetch_assoc($result);
// echo htmlentities($row['user_name']);
// var_dump()




?>