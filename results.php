<?php
	// get the base and height from the textfields
	$baseA = $_POST['base1'];
	$baseB = $_POST['base2'];
	$height = $_POST['height'];

	// calculate the area
	$volume = (1/3) * $baseA * $baseB * $height;
?>
	<h3>Results:</h3>
	The area of the trapezoid is <?php echo "$volume" ?>cm<sup>3</sup>.