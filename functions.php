<!DOCTYPE html>
<html>
<head>
	<title>PHP functions</title>
</head>
<body>
	<?php
		//A function is a block of statements that can be used repeatedly in a program
		//Syntax function functionName ($args1, $args22) {code to be executed when this function is called/invoked}

		echo"Function Definition<br>";
		function sayHello(){
			echo "<h2>Hello World!!</h2>";
			echo "<p>Functions are pretty dope!</p>";
		}

		echo "Function invocation/calling<br>";
		sayHello();
		sayHello();
		sayHello();

		function sayHelloTo($name){
			echo "How are you doing today $name <br>";
		}

		sayHelloTo("Mohamed");
		sayHelloTo("Amit");
		sayHelloTo("Alvo");
		echo "<br>";



		//ForEach...
		$classcharlie = array("Damascene", "Amit", "Abdullahi", "Mbatia", "Korir", "Samantha", "Kibet", "Joyce", "Melyn");

		function sayHelloToEveryone($classcharlie){
			foreach ($classcharlie as $value) {
				echo "sayHelloToEveryone $value <br>";
			}
		}sayHelloToEveryone($classcharlie);

		$newarr = [34, 56, 786];
		sayHelloToEveryone($newarr);

		echo "<br><h3>Function Default</h3>";
		function halla($name ='dear', $timeOfDay = 'mornning'){
			echo "How are you doing $name. Do have a lovely $timeOfDay <br>";
		}

		halla("Joyce", "Afternoon");
		halla("Wale", "Evening");
		halla("Mohamed", "Morning");

		echo "<h4>Functional Optional Parameters</h4>";
		function Welcome($name='friend', $salutation=null){
			if($salutation){
			echo "Hi $salutation, $name. Welcome to our event <br>";
			}else{
				echo "Welcome $name <br>";
			}
		}	
		Welcome("Alvin");
		Welcome("Ashley", "Ms.");


		echo "<h2>Function return value</h2>";
		function areasquare($l){
			$area = $l * $l;
			return $area;
		}
		// echo you should not use inside function...
		//NB: use outside function...
		echo "The area of this square is : " .areasquare(10);
		echo "<br>";
		function add($a, $b){
			return $a + $b;
		}
		echo "Addition is: " .add(54, 78);
		echo "<br>";
		echo "The square of adding this two numbers is : " .areasquare(add(2, 10));

		?>

</body>
</html>