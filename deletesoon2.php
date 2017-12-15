<!-- <?php

//session_start();

//echo $_POST['box1']."</br>";
//echo $_POST['box2']."</br>";
?> -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<?php
			session_start();
			$box1= $_POST['box1'];
			$box2 = $_POST['box2'];
			echo $box1."</br>";
			echo $box2."</br>";
		?>

		

	</div>

</body>
</html>