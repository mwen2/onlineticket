<?php
	$mysql_server_name="localhost"; //���ݿ����������
    $mysql_username="levy"; // �������ݿ��û���[Ĭ��Ϊroot��������ǿ���ͨ��select * from mysql.user ��ʽ��ѯ]
    $mysql_password="93910"; // �������ݿ�����
    $mysql_database="levy"; // ���ݿ������
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	
	$strsql=$_POST["query"];
	mysql_db_query($mysql_database, $strsql, $conn);
?>
<script>window.location.href="all_data.php"</script>