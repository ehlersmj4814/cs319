<?php
$image = "gene.jpg";
$name = "Gene Belcher";
$birthdate = "July 24, 2005";
$age = date_diff(date_create('2005-7-24'), date_create('today'))->y;
$quote = "\"You should know when you hold hands with me, you are holding hands with everything I've ever eaten.\""
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Fictional Character</title>
		<meta charset="utf-8">
	</head>
	<body>
	<img src="<?php echo $image?>" alt="<?php echo $name ?>">
	<p>Name: <?php echo $name ?></p>
	<p>Birthdate: <?php echo $birthdate ?></p>
	<p>Age: <?php echo $age ?></p>
	<p>Quote: <?php echo $quote ?></p>
	</body>
</html>