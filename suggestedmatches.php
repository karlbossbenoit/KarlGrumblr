<?php

require 'db.php';
session_start();
$username= $_SESSION['login'];
//echo"YOUR IN ";
//echo "Logged In:".$username."<br><br>";


//////<!-- GETS USER POINTS FROM WORKING TABLE-->
$user_work_query =$db->query("SELECT user_points FROM working WHERE user_name='$username'");
$user_work_result= $user_work_query->fetch_assoc();
$user_working_points= $user_work_result['user_points'];
//echo $user_working_points;
//////<!-- GETS USER POINTS FROM WORKING TABLE-->


//////<!-- GETS USER POINTS FROM FAMILT TABLE-->
$user_family_query =$db->query("SELECT * FROM family_life WHERE user_name='$username'");
$user_family_result= $user_family_query->fetch_assoc();
$user_family_points=$user_family_result['user_points'];

//////<!-- GETS USER POINTS FROM FAMILT TABLE-->
$usertotal = $user_family_points + $user_working_points;
//echo $usertotal."<br><br>";

//////<!-- GETS USER_NAME, USER_ID & FAMILY.USER_POINTS FROM FAMILY TABLE-->
$working_match_statement="SELECT user_information.user_name, user_information.user_id, working.user_points FROM user_information JOIN working ON user_information.user_id=working.user_id ORDER BY working.user_points ASC";
$working_match_query= $db->query($working_match_statement);
//////<!-- GETS USER_NAME, USER_ID & FAMILY.USER_POINTS FROM FAMILY TABLE-->


while($working_match_result= $working_match_query-> fetch_assoc()){
	$working_match_assoc_name=$working_match_result['user_name'];
	$working_match_assoc_id=$working_match_result['user_id'];
	$working_match_assoc_points=$working_match_result['user_points'];
	$userinfo[$working_match_assoc_name]['workuserpoints']= $working_match_assoc_points;}
	//print_r($userinfo);}


//////<!-- GETS USER_NAME, USER_ID & FAMILY.USER_POINTS FROM FAMILY TABLE-->
$family_match_statement="SELECT user_information.user_name, user_information.user_id, family_life.user_points FROM user_information JOIN family_life ON user_information.user_id=family_life.user_id ORDER BY family_life.user_points ASC";
$family_match_query= $db->query($family_match_statement);
//////<!-- GETS USER_NAME, USER_ID & FAMILY.USER_POINTS FROM FAMILY TABLE-->

while($family_match_result= $family_match_query-> fetch_assoc()){
	$fam_match_assoc_name=$family_match_result['user_name'];
	$fam_match_assoc_id=$family_match_result['user_id'];
	$fam_match_assoc_points=$family_match_result['user_points'];
	$userinfo[$fam_match_assoc_name]['famuserpoints']= $fam_match_assoc_points;
	//print_r($userinfo);
}


foreach ($userinfo as $key => $value1) {
	//echo "username: ".$key."<br>";
	foreach ($value1 as $element) {
		$count++;
		//echo " points: ".$element."<br>";
		if($count==1){
			$total+=$user_working_points/$element;
			$testtotal=$user_working_points/$element;
			//echo $element."<br>";
			//echo "[work division: ".$testtotal."<br>";
			if($total=1){ 
				$valholder[$key]= $total;}

		}elseif($count==2){
			$total+=$user_family_points/$element;
			$testtotal=$user_family_points/$element;
			//echo $element."<br>";
			//echo "fam division: ".$testtotal."]<br>";
		}
	
	}
	$totalarray[$key]=$total;
	$count =0;
	$total=0;
	//print_r($tptt);

	
	//echo " THE TOTAL IS: ".$value."<br><br>";
	

	

	
	# code...
  }//print_r($totalarray);

	foreach ($totalarray as $key => $value2) {

		if($value2==2 && $valholder[$key]==1 ){
			$matches[$key]="perfect match";
		}
		elseif($value2<5&& $totalarray[$key]>0.12){
			$matches[$key] = "sufficient match";
		}
		else{$matches[$key]="lesser match";}
		//echo $value2."<br>";
		# code...
		//echo " THE TOTAL IS: ".$value2."<br><br>";
	}

//print_r($matches);
echo"<br>";

foreach ($matches as $key => $value) {
	echo $key.",  ";//." compatability: ".$value."<br>";
	# code...
}
  //print_r($totalarray);
  /*
 echo"YOUR MATCHES:<br><br>";
  foreach ($matches as $key =>$element ) {

  	echo $key.": "."compatability: ".$element."<br>";

  	# code...
  }
*/
  //print_r($matches);








?>