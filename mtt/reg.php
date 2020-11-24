<?php

if(isset($_POST["submit"])){
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$repass = $_POST["repass"];

	require_once 'dbh.php';
	require_once 'functions.php';

	if (emptyInputSignup($user, $pass) !== false) {
		header("location: ../mtt/register.php?error=emptyinput");
		exit();
	}

	if (invalidUid($user) !== false) {
		header("location: ../mtt/register.php?error=invaliduid");
		exit();
	}

	if (pwdMatch($pass, $repass) !== false) {
		header("location: ../mtt/register.php?error=passwordsdontmatch");
		exit();
	}

	if (uidExists($conn, $user) !== false) {
		header("location: ../mtt/register.php?error=usernametaken");
		exit();
	}

	createUser($conn, $user, $pass);

}else{
	header("location: ../mtt/register.php");
	exit();
}
?>