<?php
	session_start();
	$mysql_server_name="localhost"; //���ݿ����������
    $mysql_username="levy"; // �������ݿ��û���[Ĭ��Ϊroot��������ǿ���ͨ��select * from mysql.user ��ʽ��ѯ]
    $mysql_password="93910"; // �������ݿ�����
    $mysql_database="levy"; // ���ݿ������
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	
	$new_name=$_POST['name'];
	$new_phone=$_POST['phone'];
	$strsql="update person set name='$new_name' where email_id='$_SESSION[email]'";
	$strsql1="update person set phone_number='$new_phone' where email_id='$_SESSION[email]'";
	mysql_db_query($mysql_database, $strsql, $conn);
	mysql_db_query($mysql_database, $strsql1, $conn);
	mysql_close($conn);
?>