 <?php
 session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="1tr">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <head>
 	<title>NHS WEBSITE </title>

 <meta charset="utf-8">
 <meta name="viewport" content="width=devicewidth, inital-scale=1.0">
 <link rel="stylesheet" type="text/css" href="css/reset.css">
 <link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">


 </head>
 <body>
	<nav> 
		<a href="index.php">Home</a>
			<a href="discover.php">About Us</a>
			<a href="blog.php">Working</a>

			<?php  
				if (isset($_SESSION["useruid"])) {
				echo "<a href='profile.php'>Profile page</a>";
				echo "<a href='includes/logout.inc.php'>Log out</a>";
		} 
		else {
			echo "<a href='signup.php'>Sign up</a>";
			echo "<a href='login.php'>Log in</a>";
		}
	?>

		</nav>
	</div>
</body>

 