<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>payment verification</title>
</head>
<body>
	<form method="post" action="logic_verify.php">
		Message<br>
		<textarea name="message" rows="10" cols="100"></textarea><br>
		Tracking numbers separated by dot<br>
		<textarea name="tracking" rows="10" cols="100"></textarea>
		<input type="submit" value="Submit">
	</form>
</body>
</html>