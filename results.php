<?php
	// get the base and height from the textfields
	$baseA = $_POST['base1'];
	$baseB = $_POST['base2'];
	$height = $_POST['height'];

	// calculate the area
	$A = $baseA * $baseB;
    $volume = (1/3) * $A * $height;
    $volume = round($volume, 2);
?>
	<h3>Results:</h3>
	The volume of a Triangular Pyramid is <?php echo "$volume" ?>cm<sup>3</sup>.