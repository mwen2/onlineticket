<?php
	session_start();
	$mysql_server_name="localhost"; //���ݿ����������
    $mysql_username="levy"; // �������ݿ��û���[Ĭ��Ϊroot��������ǿ���ͨ��select * from mysql.user ��ʽ��ѯ]
    $mysql_password="93910"; // �������ݿ�����
    $mysql_database="levy"; // ���ݿ������
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);

	if(!isset($_SESSION['username'])){
					include 'bookasguest.php';
				}
				else{
					echo 'successful!  ',$_SESSION['email'];
					$strsql="insert into orders values ('$_SESSION[email]', '$_POST[select1]', 1, '$_POST[select2]',1)";
	mysql_db_query($mysql_database, $strsql, $conn);
	mysql_close($conn);	
				}
?>