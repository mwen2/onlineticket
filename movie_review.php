<?php
	session_start();
	
	$mysql_server_name="localhost"; 
    $mysql_username="levy"; // 
    $mysql_password="93910"; // 
    $mysql_database="levy"; // 
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	
	if(isset($_SESSION['username'])){
		echo $_POST['comment'];
		$strsql="insert into review values (DEFAULT, '$_POST[comment]', '$_SESSION[username]', '2015-12-30 09:00:00','1')";
	mysql_db_query($mysql_database, $strsql, $conn);
	}		
?>