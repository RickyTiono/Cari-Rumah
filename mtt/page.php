<?php
session_start();

include 'header.php';

?> 
			

			<div class="search-container">

  					<?php

  					$title = mysqli_real_escape_string($conn, $_GET['title']);
  					$notlp = mysqli_real_escape_string($conn, $_GET['notlp']);

  					$sql = "SELECT * FROM properti WHERE lokasi='$title' AND notlp='$notlp'";
  					$result = mysqli_query($conn, $sql);
  					$queryResult = mysqli_num_rows($result);

  					if($queryResult > 0){
						while($row = mysqli_fetch_assoc($result)){
							echo "<div class='search-box'>
							<h4>Rp.".$row['harga']."</h4>
							<p>".$row['lokasi']."</p>
							<p>".$row['deskripsi']."</p>
							<p>(+62)".$row['notlp']."</p>
							</div>";
						} 
					}
  					?>
  				<h1>Rumah</h1>


  				<div class="footer">
				<p>160418040</p>
				
				</div>
		
			</div>