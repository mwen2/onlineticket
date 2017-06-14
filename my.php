<?php 
		session_start();
		if(!isset($_SESSION['username'])){
			header("Location:login.html");
			exit();
		}
		$username=$_SESSION['username']; 
		echo $username;
?>