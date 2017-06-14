<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Book as a guest</title>
		<style type="text/css"> 
			
		</style>
	</head>
	<body>
		<h1>Enter the information below to continue booking as a guest!</h1>
		<?php echo $_POST['select1']; $theater = $_POST['select1'];
		 echo $_POST['select2']; $time =$_POST['select2']; ?>
		<div>
			<form method="post" action="booking.php">
			<label for="theater">Theater</label>
			<input type="text" value=<?php echo (str_replace(' ','&nbsp;',$_POST['select1'])); ?>  name="theater"/>
			<br/>
			<br/>
			<label for="time">Time</label>
			<input type="text" value=<?php echo str_replace(' ','&nbsp;',$_POST['select2']);?> name="time"/>
			<br/>
			<br/>
			<label for="name">Name</label>
			<input type="text" name="name"/>
			<br/>
			<br/>
			<label for="email">Email address</label>
			<input type="text" name="email"/>
			<br/>
			<br/>
			<label for="phone">Phone number</label>
			<input type="text" name="phone"/>
			<br/>
			<br/>
			<label for="address">Address</label>
			<input type="text" name="address"/>
			<br/>
			<br/>
			<label for="Card_number">Card number</label>
			<input type="text" name="card_number"/>
			<br/>
			<br/>
			<label for="card_type">Card type</label>
			<input type="text" name="card_type"/>
			<br/>
			<br/>
			<label for="expiration">expiration date</label>
			<input type="text" name="expiration_date"/>
			<br/>
			<br/>
			<input type="submit" name="book" value="Book!"/>
			</form>
		</div>
		
	</body>
<html>