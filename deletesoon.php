<?php
	
	if(isset($_POST['submit'])){

		// $_SESSION['box1']=$_POST['box1'];
		// $_SESSION['box2']=$_POST['box2'];


		//header("location: deletesoon2.php");
		require 'deletesoon2.php';
		echo $_POST['box1'];
		echo $_POST['box2'];
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<header>TESTING INPUT AND FORM SUBMITS</header>
<body>

	<form action='deletesoon.php' method='POST' autocomplete=off>
		<input type="text" name="box1"></br>
		<input type="text" name="box2"></br>
		<button type="submit" name='submit' >Submit!!</button>

		
	</form>

</body>
</html>