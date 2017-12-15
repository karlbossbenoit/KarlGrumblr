<?php

if(isset($_POST['submitcode'])){

	require 'connectchat.php';
}

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action='chatpage.php' method="POST" autocomplete="off">
	Input your code!: <input type="text" name="chatcode">
	<button type='submit' name='submitcode'> Submit Code</button>

</form>


</body>
</html> -->



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="w3-amber">

<div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="topicinfo.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Topics</a>
    <a href="invitepage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Invites</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
    <a href="matchpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Matches</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
    <a href="topicpage2.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Topics</a>
    <a href="chatpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Join ChatRoom</a>


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
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1></h1>
  
      
      	<form class="w3-padding-32" action='chatpage.php' method="POST" autocomplete="off">
			Input your code!: <input type="text" name="chatcode">
			<button type='submit' name='submitcode'> Submit Code</button>

		</form>

      </form>

      <p class="w3-text-black">Input the code delivered to you (which can be accessed within 
	  your invites pages) to gain access into an existing chatroom</p>
    </div>

    <div class="w3-third w3-center">
      <i class="w3-jumbo fa fa-fire w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

</body>

</body>
</html>