<!DOCTYPE html>
<html>
<head>
	<title>Assignment</title>
</head>
<body>
	<?php
		// $num = 0;
		// while ($num <= 9) {
		// 	echo "# <br>";
		// 	$num++;
		
		echo "<br>";
		for($count = 0; $count <= 9; $count++){
			for($k = 0; $k < $count; $k++){
				echo "# ";
			}
			echo "<br>";
		} echo "<br>";



		echo "<table border='2'>";
		for ($q = 1; $q <= 15; $q++) { 
			echo "<tr>";
			for ($i=1; $i < 15; $i++) { 
				$square = $q * $i;
				echo "<td>$q*$i=$square</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "<br>";


		for ($i=50; $i >=30; $i--) { 
			echo "$i...";		}


		echo "<br>";



		for ($i=1; $i <= 10; $i++) {
			if ($i == 6 || $i == 7) {
				break;
			}

			echo "$i--";
		}
		echo "<br>";
		echo "Outside the loop";
		
		echo "<br>";



		echo "<h1>Do-While Loop</h1>";
		// Do While loop executes your block of code ATLEAST once before checking for the condition
		// Syntax do{ Code to be run; increment counter;}While(condition);
		// $imAwesome = 0;
		// while ($imAwesome > 0) {
		// 	echo "I'm not awesome!!";
		// }
		// do{
		// 	echo "I'm Extremely awesome!! <br>";
		// 	$imAwesome++;
		// }while ($imAwesome <= 5);
		// echo "<br>";


		// echo "Using a for loop, populate this array with odd numbers 10 - 100 <br>";
		// $oddnumbers = array();
		// print_r($oddnumbers);
		// $oddnumbers[0] = 1;
		// $oddnumbers[1] = 3;
		// $oddnumbers[2] = 5;
		// print_r($oddnumbers);
		// echo "<br>";



		for($v = 10; $v <= 100; $v++){
			if(!($v % 2  == 0)){
				$oddnumbers[$v] = $v;
			}
		}
		print_r($oddnumbers);
	?>
</body>
</html>