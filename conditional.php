<!DOCTYPE html>
<html>
<head>
	<title>Conditional Statements</title>
</head>
<body>
	<h3>Are used to perform different actions based on different conditions</h3>
	<?php 
	echo "<h2>Conditional IF</h2>";
	// Syntax of an if statement
	// if (condition) { This code will run if condition is true}
	$a = 700;
	$b = 70;

	if($a < $b) {
		echo "A is less than B <br>";
	}

	//  Real life examples
	//  Only Welcome new users
	$newUser = true;
	if($newUser) {
		echo "<h2>Welcome!!</h2>";
		echo "<p>We are glad you signed up</p>";
	}

	//Don't divide by Zero
	$denominator = 0;
	$numerator = 48;
	if($denominator != 0){
		$result = $numerator / $denominator;
		echo "<h2>Result is: = " . $result;
	} else {
		echo "<h1>Sorry, but you cannot divide a number by Zero</h2>";
	}

	/* Syntax of IF-ELSE statement 
		if(true){
			run this code
		} else {
			this will run if condition is false
		}
	*/
	
	echo "<h2> IF ELSE-IF ELSE statement </h2>";
	/* Syntax
	if(condition){
		do this
	}elseif(condition2){
		then do this
	}elseif(condition3){
		do this
	}else {
		if none of the conditions being checked are true, then do this
	}
	*/


	$x = 1200;
	$y = 120;

	if($x > $y){
		echo "X is Greater than Y <br>";
	} elseif($x < $y){
		echo "X is Less than Y <br>";
	} else {
		echo "X is Equal to Y <br>";
	}	

	echo "<h2> SCHOOL GRADING SYSTEM</h2>";
	$marks = 61;
	if($marks > 0 && $marks <= 20){
		echo "Buda acha jokes  <br>";
	} elseif ($marks > 20 && $marks <= 60 ){
		echo "Put more Effort <br>";
	} elseif ($marks > 60 && $marks <= 100){
		echo "<h1>Excellent Work</h1>";
	} else {
		echo "<b> Kindly retake your test or enter marks between 0 to 100 <br>";
	}

	echo "<h1>WEATHER</h2> <br>";
	$weather = "snowy";
	// Sunny - Kindly wear something light;
	// Windy - Kindly wear glasses;
	// Rainy - Kindly carry an umbrella;
	// Snowy - Kindly put on something warm;
	// Sunny and Snowy - wear something light and heavy;
	// Rainy or Windy - Kindly stay at home;
	if($weather == "sunny"){
		echo "Kindly wear something light";
	}elseif($weather == "rainy"){
		echo "Kindly carry an umbrella";
	}elseif($weather == "snowy"){
		echo "Kindly put on something warm";
	}

		?>
</body>
</html>