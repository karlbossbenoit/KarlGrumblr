<?php
include 'navbar.php';
session_start();
ob_start();

/*if(isset($_POST['submit'])){
  require "uploadpicture.php";*/

if(isset($_POST['addtopic'])){

  header("location: topicpage.php"); 


}

?>





<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<style>
img {
    position: absolute;
    clip: rect(0px,450px,350px,0px);
}
.img__wrap {
  position: relative;
  height: 200px;
  width: 257px;
}

.img__description {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  color: #fff;
  visibility: hidden;
  opacity: 0;

  /* transition effect. not necessary */
  transition: opacity .2s, visibility .2s;
}

.img__wrap:hover .img__description {
  visibility: visible;
  opacity: 1;
}
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-lime">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="topicinfo.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">About Topics</a>
    <a href="invitepage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Invites</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
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
  <form action="topicinfo.php" method="POST" autocomplete="off">
  <input type="submit" value="Add Topics" name="addtopic" >
  <h1 class="w3-margin w3-jumbo">Topics Description</h1>
  <p class="w3-xlarge"></p>
  

</header>

<!-- Added Grid -->

<div class=" w3-row-padding w3-padding-64 w3-container">
  
  <div class="w3-row" style="width:100%">

    <div class="img__wrap w3-col s4 w3-display-middle w3-hover-sepia"> 
    
      <img class= "img__img w3-round " src= "images/fam.jpg"   style="width:50%;max-width:400px; min-width:400px; min-height:200px" value="hello">
      <p class= "img__description w3-container">Family:

        Discuss the frustrations and pep-heves of the people you love.  



                      <br></p>
    </div>

    <div class="img__wrap w3-col s4 w3-display-right w3-hover-sepia" >
      <img class= "img__img w3-round " src= "images/work.jpg" style="width:100%;max-width:600px;min-width:500px " >
      <p class= "img__description">Work:

        Vent stress out stress from a long work day.



                      <br></p>
    </div>

    <div class="img__wrap w3-col s4 w3-display-left w3-hover-sepia" >
      <img class= "img__img w3-round " src= "images/student.jpg" style="width:50%;max-width:400px; min-width:400px" >
      <p class= "img__description">School:

        Have your academic struggles heard by a sympathetic ear.



                      <br></p>

    </div>

    
     </div> 
    
  
</form>

<div>
  
</div>



</body>


</html>

