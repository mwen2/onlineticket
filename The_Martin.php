<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>The Martin</title>
		<style type="text/css"> 
			#movie{height:600px;
				   margin:20px;}
			#poster{height:500px;
					width:330px;
					text-align:center;
					font-size:28px;
					float:left;
					padding-right:50px;}
			#poster img{height:100%;
		                width:100%;}
		    #info{font-size:24px;}
		    #reviews{margin:20px;}
		    .review{border:1px solid #000;
		    		padding:20px;}
		    #theater{margin:20px;}
		</style>
	</head>
	
	<body>
		<div id="mainpage">
			<?php echo "<a href='mainpage.html'>mainpage</a>"; ?>
		<div id="movie">
			<div id="poster">
				<img title="The Martin" src="http://www.scifinow.co.uk/wp-content/uploads/2015/08/The-Martian-Launch-One-Sheet.jpg">
				<p>The Martin</p>
			</div>
			<div id="info">
				<h1>The Martin</h1>
				<p>Date: October 2, 2015</p>
				<p>Director: 
					<a title="Ridley Scott" href="https://www.google.com/search?espv=2&biw=1440&bih=728&q=ridley+scott&stick=H4sIAAAAAAAAAOPgE-LWz9U3MDSyNK0yt1TiAHHMkjPStMSyk6300zJzcsGEVUpmUWpySX4RAFe9YJwxAAAA&sa=X&ved=0ahUKEwjRr-GsyM_JAhWL64MKHSAVDMAQmxMIsgEoATAR">Ridley Scott</a>
				</p>
				<p>Cast: 
					<a title="Matt Damon" href="https://www.google.com/search?espv=2&biw=1440&bih=728&q=matt+damon&stick=H4sIAAAAAAAAAONgFuLWz9U3MDSyNK0yt1TiBHPMLFNytHh888syU0PyHZNL8osAipu8HSgAAAA&sa=X&ved=0ahUKEwjRr-GsyM_JAhWL64MKHSAVDMAQsQ4I2AEwFg">Matt Damon</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a title="Jessica Chastain" href="https://www.google.com/search?espv=2&biw=1440&bih=728&q=jessica+chastain&stick=H4sIAAAAAAAAAONgFuLWz9U3MDSyNK0yt1TiAnFMjLOrkou0eHzzyzJTQ_Idk0vyiwCLswlKKQAAAA&sa=X&ved=0ahUKEwjRr-GsyM_JAhWL64MKHSAVDMAQsQ4I2wEwFg">Jessica Chastain</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a title="Kate Mara" href="https://www.google.com/search?espv=2&biw=1440&bih=728&q=kate+mara&stick=H4sIAAAAAAAAAONgFuLWz9U3MDSyNK0yt1TiBHGSjApSirR4fPPLMlND8h2TS_KLABR76X4oAAAA&sa=X&ved=0ahUKEwjRr-GsyM_JAhWL64MKHSAVDMAQsQ4I3gEwFg">Kate Mara</a>&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<br/>
				<p>When astronauts blast off from the planet Mars, they leave behind Mark Watney (Matt Damon), presumed dead after a fierce storm. With only a meager amount of supplies, the stranded visitor must utilize his wits and spirit to find a way to survive on the hostile planet. Meanwhile, back on Earth, members of NASA and a team of international scientists work tirelessly to bring him home, while his crew mates hatch their own plan for a daring rescue mission.</p>
			</div>
		</div>
		
		<div id="theater">
			<h1>Watch this movie!</h1>
			<form action="buy_register.php" method="post" >
    			<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choose your theater:</label>
    			<select name="select1">
     				<option value="151 W Randolph St" selected="selected">AMC</option>
      				<option value="175 N State St">Harper Theater</option>
    			</select>
    			<br/>
    			<br/>
    			<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choose your scene:</label>
    			<select name="select2">
     				<option value="2015-12-25 10:00:00" selected="selected">2015-12-25 10:00:00</option>
      				<option value="2015-12-25 15:00:00">2015-12-25 15:00:00</option>
    			</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type='submit' name='buy' value='buy'/>			
			</form>
		</div>
		
		<div id="reviews">
			<h1>Reviews</h1>
			<?php
			$mysql_server_name="localhost"; //
    $mysql_username="levy"; // 连接数据库用户名[默认为root，如果忘记可以�过select * from mysql.user 方式查询]
    $mysql_password="93910"; // 
    $mysql_database="levy"; // 
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
			
	$strsql="select * from review ";
	$result=mysql_db_query($mysql_database, $strsql, $conn);
    
for ($i=0;$i<mysql_num_rows($result);$i++){
	while($row=mysql_fetch_row($result))
	{ ?>
				<div class="review">
					<h2>Thrilling Sci-Fi Survival Adaptation</h2>
					<h3><?php echo $row[2]; ?> <?php echo $row[3]; ?></h3>
					<p><?php echo $row[1]; ?></p>
				</div>
			<?php } }?>	
				
				<div class="review">
					<form action="movie_review.php" method="post">
						<label><h3>Add your comment here:</h3></label>
						<br/>
						<textarea cols="150" rows="20" name="comment"></textarea>
						<br/>
    					<input type="submit" value="submit" name="submit" />
 			   			<input type="reset" value="clear"  name="reset" />
					</form> 
				</div>
		</div>	
	</body>
<html>