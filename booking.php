<?php
	$mysql_server_name="localhost"; //数据库服务器名称
    $mysql_username="levy"; // 连接数据库用户名[默认为root，如果忘记可以通过select * from mysql.user 方式查询]
    $mysql_password="93910"; // 连接数据库密码
    $mysql_database="levy"; // 数据库的名字
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);

	echo 'successful!';
	
	$strsql2= "insert into card values ('$_POST[card_number]', '$_POST[card_type]', '$_POST[expiration_date]')";
	$strsql3="insert into person values('$_POST[email]', '$_POST[name]', '$_POST[address]', '$_POST[phone]')";
	$strsql1="insert into guest values ('$_POST[email]', '$_POST[card_number]')";
	$strsql4="insert into orders values ('$_POST[email]', '$_POST[theater]', 1, '$_POST[time]',1)"; 
	$strsql5="insert into orders values ('$_POST[email]', '151 W Randolph St', 1, '2015-12-25 10:00:00',1)"; 
		
	mysql_db_query($mysql_database, $strsql2, $conn);
	mysql_db_query($mysql_database, $strsql3, $conn);
	mysql_db_query($mysql_database, $strsql1, $conn);
	mysql_db_query($mysql_database, $strsql4, $conn);
	mysql_db_query($mysql_database, $strsql5, $conn);
	
	mysql_close($conn);	
				
?>