<!DOCTYPE html>
<html lang="en">
	<head>
		<title>8 Ball</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Magic 8 Ball</h1>
		<?php
			$question = $_REQUEST["question"];
			echo "<p>You asked: \"".$question."\"</p>";
			
			$answers = array("Yes, definitely", "It is certain", "Without a doubt", "Ask again later", "Cannot predict now", "Concentrate and ask again", "Don't count on it", "Very doubtful", "My sources say no");
			$index = mt_rand(0,(count($answers)-1));
			echo "<p>The Magic 8 Ball answers: \"".$answers[$index]."\"</p>";
		?>
	</body>
</html>