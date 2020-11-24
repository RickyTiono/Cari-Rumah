<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="registerstyle.css">
</head>
<body>
	<h3 style="padding-left: 50px;"><a href="home.php">Cari Rumah</a></h3>
	<div id="box">
<div class="login-box">
<form action="log.php" method="POST">
	<h1>Login</h1>
	<div class="textbox">
		<input type="text" placeholder="Username" name="user" value="">
	</div>

	<div class="textbox">
		<input type="password" placeholder="Password" name="pass" value="">
	</div>

	<input class="btn" type="submit" name="submit" value="Sign In">
</form>
	<footer>
				<a href="register.php">Sign Up</a>
				<?php
if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {
		echo "<p>Fill in all fields!</p>";
	}else if($_GET["error"] == "wronglogin"){
		echo "<p>Incorrect login information!</p>";
	}
}
?>
	</footer>
</div>
</div>
</body>
</html>