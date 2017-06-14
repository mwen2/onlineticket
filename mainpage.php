<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Main Page</title>
		<style type="text/css"> 
		#login{float:right;
		       margin-right:10px;}
		#register{float:right;
		          margin-right:10px;}
		#title{font-size:80px;
			   text-align:center;
			   padding: 40px;}
		#pic{text-align:center;
			 padding: 40px;}
		#choose_movie{font-size:40px;
		              height:1500px;
		              padding:40px;}
		.movie{text-align:center;
		       height:500px;
		       width:330px;
		       padding-right:60px;
		       padding-bottom:100px;
		       float:left;}   
		.movie img{height:100%;
		           width:100%;}
		.movie p{font-size:28px;
		         text-align:center;}
		
		</style>
	</head>
	
	<body>
		<div id="login">
		 <?php echo "<a title='login' href='login.html'>login</a>"; ?>
		</div>
		<div id="register">
		<?php echo "<a title='register' href='register.html'>register</a>";?>
		</div>
		
		<div id="title">Watch Movies</div>
		<div id="pic">
			<img title="mainpage" src="http://content.mycutegraphics.com/graphics/movie/movie-night.png">
		</div>
		<?php 
		session_start(); 
		if(isset($_SESSION['username'])){
			$username=$_SESSION['username']; 
			echo 'welcome ',$username,'!<br>';
			}
		?>
		<td><button onclick="logout();">Logout</button></td>
		<td><button onclick="home();">homepage</button></td>
		
		
			<div id="choose_movie">
			<p>Choose Movie</p>
			<div class="movie">
				<img title="The Martin" src="http://www.scifinow.co.uk/wp-content/uploads/2015/08/The-Martian-Launch-One-Sheet.jpg">
				<a title="The Martin" href="The_Martin.php">The Martin</a>
			</div>	
			<div class="movie">
				<img title="Spectre" src="http://cdn.theawl.com/wp-content/uploads/2015/09/CN_YqmzWEAEExOx.jpg-large.jpeg">
				<a title="Spectre" href="Spectre.html">Spectre</a>
			</div>	
			<div class="movie">
				<img title="Jurassic World" src="http://ia.media-imdb.com/images/M/MV5BMTQ5MTE0MTk3Nl5BMl5BanBnXkFtZTgwMjczMzk2NTE@._V1_SX640_SY720_.jpg">
				<a title="Jurassic World" href="Jurassic_World.html">Jurassic World</a>
			</div>
			<div class="movie">
				<img title="The Night Before" src="http://cdn1-www.comingsoon.net/assets/uploads/gallery/the-night-before/nightbeforeposter_0.jpg">
				<a title="The Night Before" href="The_Night_Before.html">The Night Before</a>
			</div>
			<div class="movie">
				<img title="Creed" src="http://cdn2-www.comingsoon.net/assets/uploads/gallery/creed/creedpostersmall.jpg">
				<a title="Creed" href="Creed.html">Creed</a>
			</div>	
		</div>	
		<script type="text/javascript">
		function logout(){
			window.open("logout.php", "newwindow", "height=700, width=500, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no")
    	}
		function home(){
			window.open("homepage.php", "newwindow", "height=700, width=500, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no")
    	}
</script>
	</body>
<html>