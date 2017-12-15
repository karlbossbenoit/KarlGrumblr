<?php
include 'navbar.php';
session_start();
ob_start();


if(isset($_POST['changemail'])){
  require "changemail.php";
}

?>





<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-teal">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="topicinfo.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Topics</a>
    <a href="invitepage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Invites</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Profile</a>
    <a href="matchpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Matches</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
    <a href="topicpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Topics</a>
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

  

  
    <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
    <a href="matchpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Matches</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">logout</a>
    <a href="chatpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Join ChatRoom</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:64px 16px">
  <h1 class="w3-margin w3-jumbo"><?php echo $_SESSION['login']."'s";?>: Profile</h1>
  <p class="w3-xlarge"></p>
</header>

<!-- Added Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      
  
      
     

 


      <div class="btn-group open">
  <a class="btn btn-primary" > <h3>Account information</h3></a>
  
    
  
  <ul class="dropdown-menu">
    <form action="emailprof.php" method="POST" autocomplete="off">
    <li><i class="fa fa-pencil fa-fw"></i>username: <?php echo $_SESSION['login'];?></li>
    <li><i class="fa fa-pencil fa-fw"></i>email address: <?php echo $_SESSION['email'];?></li>
    <input type="text" name="email">
    <button type='submit' name='changemail'>Change Your Email</button>
    
    </form>
  </ul>
</div>
      

      
    </div>

</div>


      <div class="btn-group open">
  <a class="btn btn-primary" > <h3>Edit Profile</h3></a>
  
    
  
  <ul class="dropdown-menu">
    <li><i class="fa fa-pencil fa-fw"></i><a href="proftable.php">Edit</a></li>
    
  </ul>
</div>


