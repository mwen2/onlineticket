<?php
	$mysql_server_name="localhost"; //数据库服务器名称
    $mysql_username="levy"; // 连接数据库用户名[默认为root，如果忘记可以通过select * from mysql.user 方式查询]
    $mysql_password="93910"; // 连接数据库密码
    $mysql_database="levy"; // 数据库的名字
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
// 	
	$strsql="select * from schedule";
	$result=mysql_db_query($mysql_database, $strsql, $conn);
	
    // 获取查询结果
    $row=mysql_fetch_row($result);
    echo '<font styel=\"color:grey\">';
    echo '<table border="1" cellpadding="1" cellspacing="2">';
    // 显示字段名称
    echo "\n<tr>\n";
    for ($i=0; $i<mysql_num_fields($result); $i++)
    {
      echo '<td bgcolor="grey"><b>'.
       mysql_field_name($result, $i);
      echo "</b></td>\n";
    }
    echo "</tr>\n";
    // 定位到第一条记录
    mysql_data_seek($result, 0);
    // 循环取出记录
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