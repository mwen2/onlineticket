<?php
	session_start();
	$mysql_server_name="localhost"; //数据库服务器名称
    $mysql_username="levy"; // 连接数据库用户名[默认为root，如果忘记可以通过select * from mysql.user 方式查询]
    $mysql_password="93910"; // 连接数据库密码
    $mysql_database="levy"; // 数据库的名字
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	echo $_SESSION['email'];
	//$strsql="insert into orders values ('$_SESSION[email]', '$_POST[user_id]', '$_POST[pass]', '$_POST[card_number]')";
	mysql_db_query($mysql_database, $strsql, $conn);
	mysql_close($conn);
?>