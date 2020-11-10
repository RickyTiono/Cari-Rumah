<?php

function emptyInputSignup($user, $pass){
	$result;
	if (empty($user) || empty($pass)) {
		$result = true;
	}else{
		$return = false;
	}
	return $return;
}

function invalidUid($user){
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $user)) {
		$result = true;
	}else{
		$return = false;
	}
	return $return;
}

function pwdMatch($pass, $repass){
	$result;
	if ($pass !== $repass) {
		$result = true;
	}else{
		$return = false;
	}
	return $return;
}

function uidExists($conn, $user){
	$sql = "SELECT * FROM users WHERE name =?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../mtt/register.php?error=stmtfailed1");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $user);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
		
	}else{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function createUser($conn, $user, $pass){
	$sql = "INSERT INTO users (name, password) VALUES (?, ?);";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../mtt/register.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ss", $user, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../mtt/register.php?error=none");
	exit();
}

function emptyInputLogin($user, $pass){
	$result;
	if (empty($user) || empty($pass)) {
		$result = true;
	}else{
		$return = false;
	}
	return $return;
}

function loginUser($conn, $user, $pass){
	$uidExists = uidExists($conn, $user);

	if ($uidExists === false) {
		header("location: ../mtt/login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["password"];
	$checkPwd = password_verify($pass, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../mtt/login.php?error=wronglogin");
		exit();
	}else if ($checkPwd === true) {
		session_start();
		$_SESSION["name"] = $uidExists["name"];
		header("location: ../mtt/home.php");
		exit();
	}
}
?>