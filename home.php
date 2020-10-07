<?php

session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
		
			<nav id="navigation">
				<ul id="nav">
					<li><a href="home.php">Cari Rumah</a></li>
					<li style="float:right;"><a href="login.php">Register</a></li>
					<li style="float:right;"><a href="register.php">Login</a></li>
				</ul>
			</nav>

			<div id="wrapper">
  					
  					<div id="banner">
  					<h1> Carilah tempat tinggal impianmu </h1>
  					<div class="searchbox">
  						<input type="text" name="lokasi" placeholder="Cari provinsi atau kota">
  					</div>
  					<input type="button" class="searchbutton" value="Search">

  				</div>
			</div>

			<div id="content_area">
				<?php echo $content; ?>
			</div>

			<div id="sidebar">
				
			</div>

			<footer>
				<p>s160418040</p>
			</footer>
		
	</body>
</html>