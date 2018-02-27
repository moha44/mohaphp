<!DOCTYPE html>
<html>
<head>
	<title>PHP INBUILT FUNCTIONS</title>
</head>
<body>
	<?php
		echo "<h2>Commonly used functions to manipulate Strings</h2>";
		$first = "The quick brown fox ";
		$second = " Jumped over the lazy dog";
		$third =  $first;
	    $third .= $second;
	    echo $third;
	?>
	<br>
	Length: <?php echo strlen($third) ; ?> <br>
	Count the words: <?php echo str_word_count($third) ; ?> <br>
	Lowercase: <?php echo strtolower($third) ; ?> <br>
	Uppercase: <?php echo strtoupper($third) ; ?> <br>
	Uppercase words: <?php echo ucwords($third) ; ?> <br>
	Uppercase first: <?php echo ucfirst($third) ; ?> <br>
	Find word: <?php  echo strstr($third, "lazy") ; ?> <br>
	Replace: <?php  echo str_replace("fox",  "fisi", $third) ; ?> <br>
	Replace: <?php  echo str_replace("quick",  "super-fast", $third) ; ?> <br>
	Replace: <?php  echo str_replace("quick",  "super-fast", $third) ; ?> <br>
	Repeat: <?php  echo str_repeat("I'm Awesome!!!", 100) ; ?> <br>
	Position: <?php echo strpos($third, "over") ;?> <br>
	Substring: <?php echo substr($third, 16,18) ;?> <br>


</body>
</html>