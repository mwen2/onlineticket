<?php
	session_start();
	$mysql_server_name="localhost"; //���ݿ����������
    $mysql_username="levy"; // �������ݿ��û���[Ĭ��Ϊroot��������ǿ���ͨ��select * from mysql.user ��ʽ��ѯ]
    $mysql_password="93910"; // �������ݿ�����
    $mysql_database="levy"; // ���ݿ������
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	echo $_SESSION['email'];
	//$strsql="insert into orders values ('$_SESSION[email]', '$_POST[user_id]', '$_POST[pass]', '$_POST[card_number]')";
	mysql_db_query($mysql_database, $strsql, $conn);
	mysql_close($conn);
?>