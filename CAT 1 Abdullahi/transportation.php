<!DOCTYPE html>
<html>
<head>
 	<title></title>
</head>
<body>
 
 
	<?php		
			echo "Travel takes many form, across the country, or around the world. <br/>";
			echo "Here's a list of some common modes of transportation: <br/> <br/>";			
 
		if (empty($_POST['userInput'])) {
			$transMode=array ('Automobile','Jet','Ferry','Subway');
			$textLabel="<br/>Have something to add? <br/>(Please separate entries with a comma): <br/>";
		}															
		else {														
			$tempString1=explode (',',$_POST['transModeArray']);	

			$tempString2=explode (',',$_POST['userInput']);	

			$transMode=array_merge ($tempString1,$tempString2);		

			$textLabel="<br/> Add more?<br/>";						

		}
		foreach ($transMode as $transportMode) 
			echo "<li>$transportMode</li>";		

		$tempString1=implode(',',$transMode);	
	?>											
		<form action="" method="post">		
			<?php echo"$textLabel"; ?>
			<input type="text" name="userInput" maxlength="500"/>
			<input type="hidden" name="transModeArray" value="<?php echo"$tempString1"; ?>" /> <br/>
			<input type="submit" value="Go!">
		</form>
</body>
</html>