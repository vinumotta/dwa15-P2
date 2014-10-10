<!doctype html>
<html>
<head>


	
	<meta charset="utf-8"> 
	<title>Password Generator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<?php 
	require 'password.php';

	function display()
	{
		$password  = generatePassword($_POST["words"], $_POST["numbers"], $_POST["symbols"]);
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
	xkcd Password Generator</h1>

	<form method='post' action='index.php'>
    Enter Password Parameters<br>
    <input type='text' name='words'>Number of words<br>
    <input type="checkbox" name="numbers" value="numbers">Include a number<br>
	<input type="checkbox" name="symbols" value="symbols">Include a symbol
    <input type='submit' value='Generate a password!' name='submit'><br>
	</form>



	<br><p>This page helps you come up with a readable password that you can remember and is hard to guess as described by the xkcd comic below. </h3><p>

	<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
	</p>

	

</body>
</html>