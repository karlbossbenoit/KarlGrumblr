<?php
	if(isset($_POST['sendinvite']))
	{
		require 'sendinvite.php';
	}
//if(isset($_POST['submit'])){
	//if(isset($_POST['user_sug'])){
	//require 'suggestedmatches.php';
//}
//}

?>

<!DOCTYPE html>
<html>
<head>
	<title>matchpage</title>
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
    <a href="matchpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Matches</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
    <a href="topicpage2.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Topics</a>
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

<header class="w3-container w3-red w3-center" style="padding:64px 16px">
  <h1 class="w3-margin w3-jumbo">Matches</h1>

<div class="w3-center">
  <form action='matchpage.php' method="POST" autocomplete="off">
		<li>Invite User</li>
    <input type="text" name="invitname" placeholder="Invite User"> </br>
    <li>Name Chatroom</li>
		<input type="text" name="chatname" placeholder="Name ChatRoom" ></br>
		<li>Chat Code</li> 
    <input type="text" name="chatcode" placeholder="Chat Code"></br>
		Send Invite<button type='submit' name='sendinvite'>submit</button>
	</form>
</div>
<?php 

  require'suggestedmatches.php';


  ?>
</header>

  



  
  

</body>

</html>

<!--
<!DOCTYPE html>
<html>
<head>
	<title>Matches!! (matchpage.php)</title>
</head>
<body>

	<form action='matchpage.php'  method='POST' autocomplete='off'>

  		<input type="checkbox"  name="user_sug" vaule='suggested'> See suggested Users<br>
  		<input type="checkbox" name="topic_sug" value="topics"> See Users suggested by Topic<br>
	<button type="submit"  name="submit">Submit</button>>
	</form>

</body>
</html>-->