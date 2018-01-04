<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Index Arrays</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			//$animal1="cat";
			//$animal2="dog";
			//$animal3="iguana";
			
			$animals = array("cat", "dog", "iguana", "bird");
			//echo $animals[1];
			//echo count($animals);
			//$index = 0;
			//echo $animals[$index];
			
			$index = 0;
			while($index < count($animals)){
				echo "<p>".$animals[$index]."</p>";
				$index++;
			}
			
		?>
	</body>
</html>