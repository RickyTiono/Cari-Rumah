<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="registerstyle.css">
</head>
<body>
	<h3 style="padding-left: 50px;"><a href="home.php">Cari Rumah</a></h3>
	<div id="box">
<div class="login-box">
<form action="registration.php" method="POST">
	<h1>Register</h1>
	<div class="textbox">
		<input type="text" placeholder="Username" name="user" value="">
	</div>

	<div class="textbox">
		<input type="password" placeholder="Password" name="pass" value="">
	</div>

	<input class="btn" type="button" placeholder="Username" name="" value="Sign Up">
</form>
	<footer class="footer">
				<a href="login.php">Sign In</a>
	</footer>
</div>
</div>
</body>
</html>