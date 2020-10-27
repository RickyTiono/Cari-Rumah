<?php
include 'header.php';
?>



<nav id="navigation">
				<ul id="nav">
					<li><a href="home.php">Cari Rumah</a></li>
					<li style="float:right;"><a href="register.php">Register</a></li>
					<li style="float:right;"><a href="login.php">Login</a></li>
				</ul>
			</nav>
<h1>Search Page</h1>
<div class="search-container">
				<?php
				if(isset($_POST['searchbutton'])){
					$search = mysqli_real_escape_string($conn, $_POST['search']);
					$sql = "SELECT * FROM properti WHERE lokasi LIKE '%$search%'";
					$result = mysqli_query($conn, $sql);
					$queryResult = mysqli_num_rows($result);

					echo "There are ".$queryResult. " results!";

					if($queryResult > 0){
						while($row = mysqli_fetch_assoc($result)){
							echo "<a href='page.php?title=".$row['lokasi']."&notlp=".$row['notlp']."'><div class='search-box'>
							<h4>Rp.".$row['harga']."</h4>
							<p>".$row['lokasi']."</p>
							<p>".$row['deskripsi']."</p>
							<p>(+62)".$row['notlp']."</p>
							</div>";
						}

					}else{
						echo "There are no results matching your search!";
					}
				}

				?>
</div>