<?php  
if (isset($_POST["submit"])) {
	$lokasi = $_POST["alamat"];
	$harga = $_POST["harga"];
	$deskripsi = $_POST["deskripsi"];
	$notlp = $_POST["nomor"];

	require_once 'dbh.php';

	$sql = "INSERT INTO properti (lokasi, harga, deskripsi, notlp) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../mtt/admin.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $lokasi, $harga, $deskripsi, $notlp);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../mtt/admin.php?error=added");
	exit();
}

if (isset($_POST["delete"])) {
	
	$notlp = $_POST["notlp"];

	require_once 'dbh.php';

	$sql = "DELETE FROM properti WHERE notlp='$notlp';";
	$query_run = mysqli_query($conn, $sql);

	if ($query_run) {
		header("location: ../mtt/admin.php?error=deleted");
	}else{
		header("location: ../mtt/admin.php?error=error");
	}


}
