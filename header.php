<?php
include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>RumahKu</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<nav id="navigation">
				<ul id="nav">
					<li><a href="home.php">Cari Rumah</a></li>
					<?php
					if (isset($_SESSION["name"])) {
						echo "<li style='float:right;'><a href='logout.php'>Log Out</a></li>";
					}else{
						echo "<li style='float:right;'><a href='register.php'>Register</a></li>";
						echo "<li style='float:right;'><a href='login.php'>Login</a></li>";
					}
					?>
				</ul>
			</nav>
</body>
</html>