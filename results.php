<?php
	// get the bases and height from the textfields
	$baseA = $_POST['base1'];
	$baseB = $_POST['base2'];
	$height = $_POST['height'];

	// calculate the volume
	$volume = (1/3) * $baseA * $baseB * $height;
	$volume = round($volume,2);
?>
	<h3>Results:</h3>
	The volume of the Triangular Pyramid is <?php echo "$volume" ?>cm<sup>3</sup>.