 <?php
include_once 'header.php'
?>

<section class="signup-form">
<h2>Log in </h2>
<div class="signup-form-form">
	<form action="includes/login.inc.php" method="post">
	<input type="text" name="uid" placeholder="Username/Email...">
	<input type="password" name="pwd" placeholder="Password...">
	<button type="submit" name="submit">Log in</button>
	</form>
	</div>

<?php  
if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {
		echo "<p>Fill in all fields!</p>";
	}
		else if ($_GET["error"] == "wronglogin") {
			echo "<p>Incorrect login information!</p>";
			
		}
	}
?>
</section>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


