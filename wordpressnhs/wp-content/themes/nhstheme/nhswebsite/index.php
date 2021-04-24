<?php
include_once 'header.php'
?>

<div class="index-intro">
	
<?php  
		if (isset($_SESSION["useruid"])) {
			echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
		
		} 
		


?>

</div>