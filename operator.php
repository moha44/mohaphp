<!DOCTYPE html>
<html>
<head>
	<title>OPERATORS IN PHP</title>
</head>
<body>
		<h1>What are operators? <br> Simply put, 23 + 20 = 43. <br> 23 and 20 are called <b>Operands</b> <b>+</b> is the operator</h1>

		<?php
			echo "<h2>Arithmetic Operators</h2>";
			$a = 89;
			$b = 56;

			echo "Addition: " . ($a + $b) . "<br>";
			echo "Subtraction: " . ($a - $b) . "<br>";
			echo "Division: " . ($a / $b) . "<br>";
			echo "Multiplication: " . ($a * $b) . "<br>";
			echo "Modulus/Remainder: " . ($a % $b) . "<br>";
			echo "Increment: " . ($a++) . "<br>";
			echo "Decrement: " . ($a--) . "<br>";

			echo "<br>";



			echo "<h2> comparison operations</h2><p>used inside condition statements to compare two values</p>";
			$a = 10;
			$b = 10;
			//== equals to
			//!= not equals to
			//> greater than
			//< less than
			//>= greater than or equals to
			//<= less than or equals to
			if($a != $b){
				echo "a equals to b <br>";
			}else {
				echo "a is not equals to b <br>";
			}


			echo "<h2>logical operators</h2> <p>used to combine conditional statements </p>";
			echo "<br>";
			echo "<h1>logical AND && - returns true ONLY if all conditions return true <br> logical OR || - returns true if either of the conditions being checked returns true <br> logical NOT ! - returns true if a condition is false and returns false if a condition is true </h1>
			";
			$cond1 = false;
			$cond2 = false;
			$cond3 = false;

			if($cond1 && $cond2 && $cond3) {
				echo "this will run if either of the condition is true";
			}
			if(true){
				echo "this will run if the condition is true";
			}

			echo "<h2>assignment operators</h2>";
			$val1 = 23;
			$val2 = 34;
			$val3 = $val1 + $val2;
			echo $val3;
			$val3 = $val3 + $val2;
			echo $val3;
			$val3 += $val2;
			$val3 -= $val2;
			






		?>
</body>
</html>