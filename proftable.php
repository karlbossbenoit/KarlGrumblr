<!DOCTYPE html>
<html>
<head>
<style>
body {
  padding-top: 80px;
  text-align: center;
  font-family: monaco, monospace;
  background: url(https://media.giphy.com/media/wTbpsFBs4Ek5W/giphy.gif) 50%;
  background-size: cover;
}
.grid-container {
  display: grid;
  grid-template-columns: auto;
  grid-gap: 10px;
  background-color: #00000;
  padding: 10px;
}
.grid-container > div {
background-color: rgba(255, 255, 255, 0.8);

  text-align: center;
  border-radius: 25px;
    border: 2px solid #000000;
    padding: 20px; 
    height: 50px;    
    font-size: 200%
}
</style>
</head>
<body>

<head>
<style>
h1 {
    color: darkSlateGrey;
    font-family: verdana;
    font-size: 300%;

}
p  {
    color: DarkSlateGrey;
    font-family: courier new;
    font-size: 200%;
}
</style>
</head>
<body>

<h1>Profile</h1>
<p>What <em> YOU </em> are all about
</body>

<div class="grid-container">
  <div> <a href="userprof.php" class=>Username</a></div>
  <div> <a href="emailprof.php" class=>Email</a></div>
  <div> <a href="passprof.php" class=>Password</a></div>  
  <div> <a href="userchats.php" class=>Chats</a></div>
</div>

</body>
</html>