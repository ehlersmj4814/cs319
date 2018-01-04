<?php set_time_limit(3); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Array to Select List</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="animal" name="animal" method="get" action="#">
			<?php
				$animals = array(Cat, Dog, Turtle, Sloth, Kangaroo, Shark, Snail);
				sort($animals);
			?>
			<select id="animalSelect" name="animalSelect">
			<?php
				for ($counter = 0; $counter < count($animals); $counter++){
					?>
					<option ><?php echo $animals[$counter]; ?></option>
					<?php
				}
			?>
			</select>
		</form>
	</body>
</html>