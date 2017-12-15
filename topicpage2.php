<?php


if(isset($_POST['submitaddtopic'])){
	
	require 'addtopic.php';
	/*echo "yourtopicwas submitted";//
	echo $_POST['family'];
	echo$_POST['work'];
	echo $_POST['school'];*/
	header('location: topicpage.php');

}

// elseif(isset($_POST['submitupdatetopic'])){
	
// 	require 'changetopic.php';
// }


/*elseif(isset($_POST['submitupdatetopic'])){

	header('location: updatetopic.php');
}*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>topic desicison</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="w3-pale-blue">

	<div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="invitepage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Invites</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
    <a href="matchpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Matches</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
    <a href="topicpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Topics</a>
    <a href="chatpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Join ChatRoom</a>


    <div class="w3-display-topright w3-container w3-dropdown-hover">
      <ri class="w3-xxlarge"> <i class="fa fa-male" width="100"></i></ri>
        <div class="w3-container  w3-dropdown-content w3-pale-red ">
            
            <ul class="w3-ul w3-pale-red w3-hoverable w3-card" style="width:100%">
                <li class="w3-hover-sand"><a href="profile.php">Profile</a></li>
            </ul>
          </div>
        </div>
</div>
</div>

	<!-- <h1 >Choose The Categories you Feel the Most Comfortable with</h1> -->
	<header class="w3-container w3-red w3-center" style="padding:64px 4px">
		
  		<h1 class="w3-margin w3-jumbo">Your Topics</h1>
  		<?php require 'taketopic.php';
  		?>
	</header>
<div class="w3-pale-blue w3-center">
	<h3><a href="topicpage.php">Would you like to Add topics?<a/></h3>
	
	
	
	</div>

	<!--<form action="topicpage.php" method="POST" autocomplete="off">-->	
		<!--<input type="submit" name="submitaddtopic"  >-->
		
		<!--<button type='submit' name='submitupdatetopic'>CHANGE Existing Topics</button>
	</form> -->
	<!--
	<form>
		
		<button type='submit' name='submitchangetopic'></button>
		<button type='submit' name='submitaddtopic'></button>

	</form>-->

</body>
</html>