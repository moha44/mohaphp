<!DOCTYPE html>
<html>
<head>
	<title>Data Type</title>
</head>
<body>
	<?php
	echo "<h1>PHP IS AWESOME</h1>";
	echo "<h2>INTEGERS</h2>";
	//An Integer is any whole number, negative or positive without a decimal place
	$int1 = 345;
	$int2 = -987;
	$add = $int1 + $int2;
	echo 'The result of adding' . $int1 . 'and' .$int2 .' is: = ' . $add . '<br>'; 

	echo "<br>";

	echo "<h2>FLOAT/DOUBLE</h2>";
	//Floats/Double
	# A double or a float is any number with a decimal point
	$float = 4567.098;
	$double = 876.0986;
	$ans = ($float % 3) * $double;
	echo $ans;

	echo "<br>";

	//Boolean
	#Booleans represent Two possible states
	$married = true;
	if($married) {
		echo "Congrats, <br>";
	}else {
		echo "Time to start looking yow!! <br>";
	}
	echo "<br>";

	$over18 = true;
	if($over18) {
		echo "You Can drink beer, <br>";
	}else {
		echo "No";
	}

	echo "<br>";


	//Arrays
	#an array stores multiple values in a single variable
	$myclassmates = $arrayName = array("Abdi", "Freddie", "Bundotich", 46 , 76.09, false);
	print_r($myclassmates);
	echo "The value in the second position is " . $myclassmates[4];
	echo "<br>";

	$mixed_array = ["string", 567, "another string", array("I'm a nested array",45)];
	print_r($mixed_array);
	echo "<br><br>";
	echo "Item at first position is:".$mixed_array[0] . "<br>";

	echo "Item at third position is:".$mixed_array[2] . "<br>";

	echo "The value in the nested is: " . $mixed_array[3][0];

	echo "<h1>TRY</h1>";
	echo "<br>";


	// 8/2/2018

	echo "<h2>Arrays</h2>";
	$competencies =  array("HTML" , "CSS" , "JS" , "VUE" , 345.087 , false , true);
	$myclassmates = ["Edu" , "Abdullahi" , "Damascene" , "Korir" , "Samantha"];
	var_dump($competencies);
	echo "<br>";
	print_r($myclassmates);

	echo "<br> <hr>";

	echo "The following are my core competencies :1. " . $competencies[0] .  " 2. " . $competencies[1] . " 3. ". $competencies[3];

	echo "<br>";

	$nestedArray = ["position one" , "position two", "position three", array("nested position one", "nested position 2", 3,4.5)];
	print_r($nestedArray);

	echo "the item at position one is: " .$nestedArray[0];
	echo "the item at position one on the nested array: " .$nestedArray[3][3];






	?>

	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>

	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>

	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>


</body>
</html>