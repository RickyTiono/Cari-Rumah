<?php

#session_start();
include 'header.php';
#$conn = new mysqli("localhost", "root","","projectmtt");
#if($conn->connect_error) {
	#echo "Unable to connect, please try again";
	#die();
#}

?>

		
			<nav id="navigation">
				<ul id="nav">
					<li><a href="home.php">Cari Rumah</a></li>
					<li style="float:right;"><a href="register.php">Register</a></li>
					<li style="float:right;"><a href="login.php">Login</a></li>
				</ul>
			</nav>

			<div id="wrapper">
  					
  				<div id="banner">
  					<form action="search.php" method="post">
  					<h1> Carilah tempat tinggal impianmu. </h1>
  					<div class="searchbox">
  						<input type="text" name="search" placeholder="Cari kota">
  					</div>
  					<button type="submit" name="searchbutton">Search</button>
					</form>
  				</div>

  				<div class="footer">
				<p>160418040</p>
				
				</div>
		
			</div>
		
		