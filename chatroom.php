<!DOCTYPE html>
<html>
<head>
	<title>chatroom</title>

<!-- -->
<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

  <script>
  	
  	$(document).ready(function(){

  		$("#submitmsg").click(function(){
  			var message = $("#msg").val();
  			$.ajax({
  				url: "insert.php",
  				type: "POST",
  				async: false,
  				data:{
  					"done": 1,
  					"message": message
  				},
  				success: function(data){
  					displayFromDatabase();
  					$("#msg").val('');
  				}

  			})
  		});
  		//$("#chatbox").load("logs.php");
  	setInterval(function(){
  		$("#userbox").load("logs.php");
      //$("#userbox").load("otherlogs.php");
  	},300);
  	});


    

  	

  	


  </script>




	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
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
	<h1>ChatRoom</h1>
  
<!-- </header> -->




<!-- <header class="w3-container w3-left-align" style="padding:20px 16px"> -->
<form action='chatroom.php' method="POST" autocomplete="off">

Your Message: <input class="w3-orange w3-center" type="text" id="msg" /> <br />
<button type="submit" id= "submitmsg" value="POST" >Send</button>
</header>
</form>
</header>
<!--<textarea rows='20' cols='50'>
	
	
</textarea><br />-->

<div class='w3-container w3-orange' id='userbox' style="padding:50px 16px">
  
 
    <!-- <h3><li  id='userbox' class='w3-red' ></li></h3> -->
  
	
	
</div>


</body>