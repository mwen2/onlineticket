<?php
	session_start();
	
	$mysql_server_name="localhost"; //
    $mysql_username="levy"; // 
    $mysql_password="93910"; // 
    $mysql_database="levy"; // 
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$strsql="select * from register where user_id='$_POST[username]'";
	$result=mysql_db_query($mysql_database, $strsql, $conn);
	$result1=mysql_fetch_array($result);
	if($password==$result1['password']){
		$_SESSION['username']=$username;
		$_SESSION['user_id']=$result1['user_id'];
		$_SESSION['email']=$result1['email_id'];
		if($_SESSION['username']=='owner'){
		echo $username,' welcome!<br/><a href="mainpage_owner.php?'.session_name().'='.session_id().'">mainpage</a>';
		}
		else if($_SESSION['username']=='manager'){
		echo $username,' welcome!<br/><a href="mainpage_manager.php?'.session_name().'='.session_id().'">mainpage</a>';
		}
		else{echo $username,' welcome!<br/><a href="mainpage.php?'.session_name().'='.session_id().'">mainpage</a>';}
		exit;
	}
	else {
	echo ('wrong password   <a href="javascript:history.back(-1);">back</a>');
	}
?>