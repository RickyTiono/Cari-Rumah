<?php

if (isset($_POST["submit"])) {
	$user = $_POST["user"];
	$pass = $_POST["pass"];

	require_once 'dbh.php';
	require_once 'functions.php';

	if (emptyInputLogin($user, $pass) !== false) {
		header("location: ../mtt/login.php?error=emptyinput");
		exit();
	}

	loginUser($conn, $user, $pass);
}else{
	header("location: ../mtt/login.php");
	exit();
}