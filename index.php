<!doctype html>
<html>
<head>


	
	<meta charset="utf-8"> 
	<title>What time is it?</title>
	<link rel='stylesheet' href='styles.css' type='text/css'>

	<?php 
	require 'password.php';
	$test = 10.5;
	$date =date("m.d.y",time());

	function display()
	{
		$password  = generatePassword($_POST["words"], $_POST["numbers"], $_POST["symbols"]);
	    echo "hello ".$_POST["words"];
	    echo "<p> Your password is :" .$password. "</p>"; 
	}
	if(isset($_POST['submit']))
	{
	   display();
	} 

	?>
		
</head>

<body class='night'>

	
	<h1>
	It is 9:34pm</h1>

	<form method='post' action='index.php'>
    Enter Password Parameters<br>
    <input type='text' name='words'><br>
    <input type="checkbox" name="numbers" value="numbers">Include a number<br>
	<input type="checkbox" name="symbols" value="symbols">Include a symbol
    <input type='submit' value='Generate a password!' name='submit'><br>
</form>




	

	<small>Time zone: America/New_York;</small><br>

	<img src='http://thewc.co.s3.amazonaws.com/challenges/php-night.png' alt='Scenery matching the time of day'>

</body>
</html>