<!DOCTYPE html>
<html>
<head>
	<title>Tupe Motisha</title>
</head>
<body>
	<h1>Create a Random quote everytime the browser window is reloaded</h1>
	<?php
		//2d array to save the quote and author name
		$quote = [
			['author' => 'Ephraim', 'text' => 'Everyone has a plan, until, they got punched in the mouth'],
			['author' => 'Abdullahi', 'text' => 'If you can create technology, you can change the world'],
			['author' => 'Amit', 'text' => "Don't let anyone get comfortable disrespecting you"],
			['author' => 'Samantha', 'text' => "Comfort is the thief of progress"],
			['author' => 'Jowi', 'text' => "Life is about making an impact not income"],
		];
		// echo "<pre>";
		// print_r($quote);
		// echo "</pre>";
		// $random = rand(91, 99);
		// echo $random;

		$quote = $quote[rand(0, (count ($quote) -1))];
		// print_r($quote);
		$quoteAuthor = $quote['author'];
		$quoteText = $quote['text'];

		// echo $quoteAuthor . " : " . $quoteText;

	?>
	<img src="img/header-bg.jpeg">
	<blockquote>
		<?php echo "<h4> &quot;" . $quoteText . " &quot;</h4>"; ?>
		<?php echo "<i> - " . $quoteAuthor . "</i>"; ?>
	</blockquote>
</body>
</html>