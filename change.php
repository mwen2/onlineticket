<?php
	$mysql_server_name="localhost"; //数据库服务器名称
    $mysql_username="levy"; // 连接数据库用户名[默认为root，如果忘记可以通过select * from mysql.user 方式查询]
    $mysql_password="93910"; // 连接数据库密码
    $mysql_database="levy"; // 数据库的名字
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	
	$strsql=$_POST["query"];
	mysql_db_query($mysql_database, $strsql, $conn);
?>
<script>window.location.href="all_data.php"</script>