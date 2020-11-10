<?php
include_once 'header.php';
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
<form action="reg.php" method="POST">
	<h1>Register</h1>
	<div class="textbox">
		<input type="text" placeholder="Username" name="user" value="">
	</div>

	<div class="textbox">
		<input type="password" placeholder="Password" name="pass" value="">
	</div>

	<div class="textbox">
		<input type="password" placeholder="Repeat Password" name="repass" value="">
	</div>

	<input class="btn" type="submit" name="submit" value="Sign Up">
</form>



	<footer>
				<a href="login.php">Sign In</a>
				<?php
if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {
		echo "<p>Fill in all fields!</p>";
	}else if($_GET["error"] == "invaliduid"){
		echo "<p>Choose a proper username!</p>";
	}else if($_GET["error"] == "passwordsdontmatch"){
		echo "<p>Password doesn't match!</p>";
	}else if($_GET["error"] == "usernametaken"){
		echo "<p>Username taken!</p>";
	}else if($_GET["error"] == "stmtfailed"){
		echo "<p>Something wrong, try again!</p>";
	}else if($_GET["error"] == "none"){
		echo "<p>You have signed up!</p>";
	}
}
?>
	</footer>
</div>
</div>
</body>
</html>