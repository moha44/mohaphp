<!DOCTYPE html>
<html>
<head>
	<title>PHP Variables</title>
</head>
<body>
	<ul>
		<li>
			PHP Hypertext Preprocessor
		</li>used for:
		<ol>
			<li>
				Managing dynamic Content
			</li>
			<li>
			    database:CRUD - Creating, Read, Update and delete data in our database
			</li>
			<li>
				Session tracking
			</li>
			<li>
				Building E-Commerce Website
			</li>
		</ol>
	</ul>
	<?php
	echo "<h1>PHP VARIABLES</h1>";
	//single line comment
	/*this is multi-line comment*/
	echo "Creating the Variables and rules";
	// a variable in php must start with followed by the variable 
	// a variable name must start with letter or an underscore
	// a variable name can not start with a number, but it can contain a number
	// a variable uis case sensative
	// a variable name can only contain alphaneumeric characters and underscores
	$age = 20;
	$name = "Mohamed";
	echo "<br>";
	echo $name;
	echo "<br>";
	$no1 = 45;
	$no2 = 46;
	$no3 = $no1 + $no2;
	echo 'The result of adding' . $no1 . 'and' . $no2 . 'is: = ' . $no3;
	$no1 = 450;
	$no2 = 765;
	$no3 = $no1 + $no2;
	echo "<br>";
	echo 'The result of adding' . $no1 . 'and' . $no2 . 'is: = ' . $no3;
	$my_name_is = "My name is";
	$mysecondnameis = 32;
	?>
</body>
</html>