<?php
	$mysql_server_name="localhost"; //���ݿ����������
    $mysql_username="levy"; // �������ݿ��û���[Ĭ��Ϊroot��������ǿ���ͨ��select * from mysql.user ��ʽ��ѯ]
    $mysql_password="93910"; // �������ݿ�����
    $mysql_database="levy"; // ���ݿ������
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