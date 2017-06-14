<html>
	<head>
		<title>Watch movies</title>>
		<style> 
		div.news{
			background-color: white;
			color: black;
			margin:20px;
			padding:20px;
		}
		div.schedules{
			background-color: gray;
			color: black;
			margin:20px;
			padding:20px;
		}
		div.reviews{
			background-color: silver;
			color: black;
			margin:20px;
			padding:20px;
		}
		body{text-align:center}
		</style>
	</head>>
	<body background="background.jpg">
		<h1>Watch Movies</h1>
		<?php
    $mysql_server_name="localhost"; //数据库服务器名称
    $mysql_username="levy"; // 连接数据库用户名[默认为root，如果忘记可以通过select * from mysql.user 方式查询]
    $mysql_password="93910"; // 连接数据库密码
    $mysql_database="levy"; // 数据库的名字
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);?>
    	<table>
    		<tr>
    			<td><button onclick="login();">Login</button></td>
    			<td><button onclick="window.location='homepage.html';">homepage</button></td>
				<td><button onclick="all_data();">See all data</button></td>
    		</tr>
    	</table>	
		<img src="TheMartian.png" alt="The Martian" style="width:800px;height:456px;"> 

<div class ="news">
<p>this is news</p>
<p><a href="http://www.eonline.com/news/718570/jennifer-lawrence-named-entertainment-weekly-s-2015-entertainer-of-the-year?utm_source=eonline&utm_medium=rssfeeds&utm_campaign=imdb_topstories">Jennifer Lawrence Named Entertainment Weekly's 2015 Entertainer of the Year
</a></p>
</div>
<div class ="schedules">
<p>this is schedules</p>
<?php
// 从表中提取信息的sql语句
    $strsql="select * from schedule";
    // 执行sql查询
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

</div>	
<div class ="reviews">
<p>this is reviews</p>
</div>	
<script type="text/javascript">
    	function login(){
    		window.open("register_login.html", "newwindow", "height=100, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no")
    	}
		function all_data(){
			window.open("all_data.php", "newwindow", "height=1000, width=1000, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no")
		}
</script>
	</body>
<html>