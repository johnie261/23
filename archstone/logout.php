<?php 
ob_start();
session_start();

function redirect($location){
  return header("Location: {$location}");
}

$Pro_ID = $_POST['Pro_ID'];

session_destroy();

	if(isset($_COOKIE['email'])) {
		unset($_COOKIE['email']);

		setcookie('email', '', time()-86400);
	}

redirect("homes");
?>