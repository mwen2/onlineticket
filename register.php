<?php
	$mysql_server_name="localhost"; //数据库服务器名称
    $mysql_username="levy"; // 连接数据库用户名[默认为root，如果忘记可以通过select * from mysql.user 方式查询]
    $mysql_password="93910"; // 连接数据库密码
    $mysql_database="levy"; // 数据库的名字
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	
	$strsql2= "insert into card values ('$_POST[card_number]', '$_POST[card_type]', '$_POST[expiration_date]')";
	$strsql3="insert into person values('$_POST[email]', '$_POST[f_name]', '$_POST[address]', '$_POST[phone]')";
	$strsql="insert into register values ('$_POST[email]', '$_POST[user_id]', '$_POST[pass]', '$_POST[card_number]','0','0','Silver')";
	mysql_db_query($mysql_database, $strsql2, $conn);
	mysql_db_query($mysql_database, $strsql3, $conn);
	mysql_db_query($mysql_database, $strsql, $conn);
	mysql_close($conn);
?>