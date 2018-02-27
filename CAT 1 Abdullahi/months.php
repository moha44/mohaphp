<?php
	$monthlist = array('January'=> '31', 'February'=> '28 days, if leap year 29', 'March' => '30', 'April' => '30', 'May' => '31', 'June' => '30', 'July' => '31', 'August' => '31', 'September' => '30', 'October' => '31', 'November' => '30', 'December' => '31');

	function createOptions(){
		foreach($GLOBALS['monthlist'] as $month => $days){
			echo "<option value=\"$month\">" .strtoupper($month)."</option>";}
	}

?>
<html>
<head>
	<title>PLEASE CHOOSE A MONTH</title>
</head>
<body>
	<?php
		if(isset($_POST['monthSelect'])){
			foreach ($GLOBALS['monthlist'] as $month => $days) {
			if($month == $_POST['monthSelect'])
			echo "The month of $month has $days days. <br/>";	
			}
		}
		echo "Please Choose a month: <br/>";	
	?>
	<form action="<?php echo"{$_SERVER['PHP_SELF']}";?>" method="POST">
		<select name="monthSelect" multiple="yes" size="10">
			<?php createOptions();?>
		</select>
		<br><input type="Submit" value="Check"/>
	</form>
</body>
</html>

