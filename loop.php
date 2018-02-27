<!DOCTYPE html>
<html>
<head>
	<title>Loops In PHP</title>
</head>
<body>
	<?php
		echo "<h2>While Loop<?h2>";
		// A while loop, loops through a block of code as long as the specified condition is true
		// while(condition==true){this block of code will always run}

		$count = 0;
		while($count <= 100){
			echo "Mohamed : value of count is $count <br>";
			$count++;
		}
		echo "Value of count after loop existe is : $count";
		$even = 200;
		while($even >= 100){
			echo "Even numbers are :" . $even . "<br>";
			$even-=2;
		}
		echo "Value of even after loop is $even";
		echo "<h3> from 0 to 100, print if a number is even, print out 'this is an even number + number' and if a number is odd, print this number is odd + number </h3>";


		$initial = 0;
		while($initial <= 100){
			if($initial % 2 == 0){
				echo "Even number " . $initial . "<br>";
			}else {
				echo "Odd number " . $initial . "<br>";
			}
			$initial++;
		}


		// ASSIGNMENT
		echo "<h3><u>Assignment</u>Using a while loop, between 100 - 500, print MARCO if a number is a multiple of 3, print POLLO if a number is multiple of 5, print MARCOPOLLO if a number is both a multiple of 3 && 5, else, print the number</h3>";





	?>
</body>
</html>