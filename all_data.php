<html>
	<head>
	</head>
	<body>
	<button onclick="insert();">Insert</button>
	<button>Delete</button>
	<button>Update</button>
	<form name="change" method="post" action="change.php">
<table
	<tr>
	<td>query: <input type="text" name="query" size="20"></td></tr>
	<tr>
	<td><input name="submit" type="submit" id="submit" value="submit"></td></tr>
</table></form>
<?php
	$mysql_server_name="localhost"; //���ݿ����������
    $mysql_username="levy"; // �������ݿ��û���[Ĭ��Ϊroot��������ǿ���ͨ��select * from mysql.user ��ʽ��ѯ]
    $mysql_password="93910"; // �������ݿ�����
    $mysql_database="levy"; // ���ݿ������
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
// �ӱ�����ȡ��Ϣ��sql���
	$arr_strsql=array();
    $arr_strsql[0]="select * from theater";
	$arr_strsql[1]="select * from movie";
	$arr_strsql[2]="select * from screen";
	$arr_strsql[3]="select * from time";
	$arr_strsql[4]="select * from person";
	$arr_strsql[5]="select * from guest";
	$arr_strsql[6]="select * from register";
	$arr_strsql[7]="select * from staff";
	$arr_strsql[6]="select * from orders";
	$arr_strsql[7]="select * from schedule";
	$arr_strsql[10]="select * from review";
	$arr_strsql[11]="select * from theaterreview";
	$arr_strsql[12]="select * from moviereview";
	
    // ִ��sql��ѯ
	foreach($arr_strsql as $strsql)
	{
		$result=mysql_db_query($mysql_database, $strsql, $conn);
    // ��ȡ��ѯ���
    $row=mysql_fetch_row($result);
    echo '<font styel=\"color:grey\">';
    echo '<table border="1" cellpadding="1" cellspacing="2">';
    // ��ʾ�ֶ�����
    echo "\n<tr>\n";
    for ($i=0; $i<mysql_num_fields($result); $i++)
    {
      echo '<td bgcolor="grey"><b>'.
       mysql_field_name($result, $i);
      echo "</b></td>\n";
    }
    echo "</tr>\n";
    // ��λ����һ����¼
    mysql_data_seek($result, 0);
    // ѭ��ȡ����¼
    while ($row=mysql_fetch_row($result))
    {
      echo "<tr>\n";
      for ($i=0; $i<mysql_num_fields($result); $i++ )
      {
        echo '<td bgcolor="#00FF00">';
        echo "$row[$i]";
        echo '</td>';
      }
      echo "</tr>\n";
    }
    
    echo "</table>\n";
    echo "</font>";
	}
	mysql_close($conn); 
?>
<script type="text/javascript">
    	function insert(){
    		window.open("insert.php", "new_window", "height=400, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no")
    	}
</script>
	</body>
<html>