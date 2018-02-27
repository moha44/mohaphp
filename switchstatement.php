<!DOCTYPE html>
<html>
<head>
	<title>SWITCH STATEMENT</title>
</head>
<body>
	<?php
	echo "<h2>Switch Statement</h2> <br>";

	echo "<br>";
	$yrborn = 1998;
	switch(($yrborn - 4) % 12) {
		case 0: $zodiac = "Ox"; break;
		case 1: $zodiac = "dragon"; break;
		case 2: $zodiac = "monkey"; break;
		case 3: $zodiac = "lion"; break;
		case 4: $zodiac = "zebra"; break;
		case 5: $zodiac = "moon"; break;
		case 6: $zodiac = "honey"; break; 
		case 7: $zodiac = "money"; break;
		case 8: $zodiac = "money count"; break;
		case 9: $zodiac = "beast"; break;
		case 10: $zodiac = "wabisk"; break;
		case 12: $zodiac = "grove"; break;
			# code...
			break;
		
		default:
			# code...
			break;
	}
	echo "yr born is $zodiac";
	?>
</body>
</html>