 <?php
include_once 'header.php'
?>

<div>
<section class="signup-form">
<h2>Sign up</h2>
	<form action="includes/signup.inc.php" method="post">
	<input type="text" name="name" placeholder="Full name...">
	<input type="text" name="email" placeholder="Email...">
	<input type="text" name="uid" placeholder="Username...">
	<input type="password" name="pwd" placeholder="Password...">
	<input type="password" name="pwdrepeat" placeholder="Repeat Password...">
	<button type="submit" name="submit">Sign Up!</button>
	</form>

</div>	
<?php  
if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {
		echo "<p>Fill in all fields!</p>";
	}
		else if ($_GET["error"] == "invaliduid") {
			echo "<p>Choose an appropriate username!</p>";
		}
		else if ($_GET["error"] == "invalidemail") {
			echo "<p>Choose an appropriate email!</p>";
		}
		else if ($_GET["error"] == "passwordsdontmatch") {
			echo "<p>Passwords doesn't match!</p>";
		}
		else if ($_GET["error"] == "stmtfailed") {
			echo "<p>Something went wrong, try again please!</p>";
		}
		else if ($_GET["error"] == "usernametaken") {
			echo "<p>Choose an appropriate username!</p>";
		}
		else if ($_GET["error"] == "none") {
			echo "<p>You have signed up!</p>";
		}
	}
?>

</section>





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>







<!-- Form for inputs that the user can enter, using the input html tag.
	Placeholder- writes a transparent input, saying what should be placed into this here. 