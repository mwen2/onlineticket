<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Homepage</title>
		<style type="text/css"> 
			.info{font-size:20px;}
		</style>
	</head>
	<body>
		<?php
	session_start();
	
	$mysql_server_name="localhost"; //���ݿ����������
    $mysql_username="levy"; // �������ݿ��û���[Ĭ��Ϊroot��������ǿ���ͨ��select * from mysql.user ��ʽ��ѯ]
    $mysql_password="93910"; // �������ݿ�����
    $mysql_database="levy"; // ���ݿ������
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	
	$strsql="select * from person where email_id='$_SESSION[email]'";
	$result=mysql_db_query($mysql_database, $strsql, $conn);
	$result1=mysql_fetch_array($result);
	$strsql1="select * from register where email_id='$_SESSION[email]'";
	$result2=mysql_db_query($mysql_database, $strsql1, $conn);
	$result3=mysql_fetch_array($result2);
	?>
		<h1>Welcome back <?php echo $_SESSION['username'];?></h1>
		<form action="change_info.php" method="post" >
		<label for="Name">Name:</label>
		<input type="text" name="name" value= <?php echo $result1['name'];?> />
		<br/>
		<label for="phone">Phone number:</label>
		<input type="text" name="phone" value= <?php echo $result1['phone_number'];?> />
		<br/>
		<label for="email">email:</label>
		<input type="email" name="email" value= <?php echo $_SESSION['email'];?> />
		<br/>
		<label for="Points">Points</label>
		<input type="text" name="points" value= <?php echo $result3['total_points']?> />
		<br/>
		<label for="Status">Status</label>
		<input type="text" name="Status" value= <?php echo $result3['status']?> />
		<br/>
		<input type='submit' name='change' value='change'/>			
		</form>
	</body>
<html>
