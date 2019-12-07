<?php

require "config/Database.php";
session_start();

function registerUser(){
	global $conn;
	$username = $_POST['username'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	if(isAllreadyRegistered($username)){
		http_response_code(400);
		die(errorMessageInJSON('Username is taken!'));
	}
	$sql = "INSERT INTO users VALUES (null,'$username','$password')";
	$query = $conn->query($sql) or die('Request unsuccessful');
	
	session_start();
	$_SESSION['username'] = $username;
	header("Location: /index.php");
	die();
}

function isAllreadyRegistered($username){
	global $conn;
	 $sql = "SELECT * FROM users WHERE username='$username'";
	 $query = $conn->query($sql) or die(errorMessageInJSON('Request unsuccessful'));
	 $row = $query->fetch(PDO::FETCH_ASSOC);
	 if(!$row){
		return false;
	 }else{
		return true;
	 }
}

function isAdmin() {
	global $conn;
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM users WHERE username='$username'";
	$query = $conn->query($sql) or die(errorMessageInJSON('Request unsuccessful'));
	$row = $query->fetch(PDO::FETCH_ASSOC);
	extract($row);
	$userItem = array('id' => $id);
	return $userItem['id'] == 1;
}

function errorMessageInJSON($text){
	return json_encode(array('error' => $text), JSON_UNESCAPED_UNICODE);
}
?>