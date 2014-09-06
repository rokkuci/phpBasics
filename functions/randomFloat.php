<!DOCTYPE html>
<html>
<head>
	<title>Random floating point</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
</head>
<body>
<div class="code">
	// generates random float numbet in range 0 ... 1 <br />
	function randomFloat($min = 0, $max = 1) {<br />
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);<br />
	}<br />
	//outputs random float value and rounds it by 1 decimal place HALF_UP<br />
	
	echo "Random floating value from 0 to 1: " . round(randomFloat(), 1);<br /><br />
</div>
<h3>Result</h3>
<?php

	// generates random float numbet in range 0 ... 1

	function randomFloat($min = 0, $max = 1) 
	{
    	return $min + mt_rand() / mt_getrandmax() * ($max - $min);
	}

	//outputs random float value and rounds it by 1 decimal place HALF_UP (can be customized)

	echo "Random floating value from 0 to 1: " . round(randomFloat(), 1);
?>

</body>
</html>
