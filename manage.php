<?php
	$mysql_server_name="localhost"; //���ݿ����������
    $mysql_username="levy"; // �������ݿ��û���[Ĭ��Ϊroot��������ǿ���ͨ��select * from mysql.user ��ʽ��ѯ]
    $mysql_password="93910"; // �������ݿ�����
    $mysql_database="levy"; // ���ݿ������
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
// 	
	$strsql="select * from schedule";
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
    
    
	
	mysql_close($conn); 
?>