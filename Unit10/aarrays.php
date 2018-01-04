<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Associative Arrays</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$person1 = array("id" => "1", "firstname" => "Matt", "lastname" => "Ehlers", "email" => "ehlersmj4814@uwec.edu");
			$person2 = array("id" => "2", "firstname" => "Heather", "lastname" => "Amthauer", "email" => "amthauha@uwec.edu");
			$person3 = array("id" => "3", "firstname" => "Dan", "lastname" => "Stevenson", "email" => "stevende@uwec.edu");
			$people = array($person1, $person2, $person3);
		?>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
			</tr>
			<?php
				$index = 0;
				while ($index < count($people)){
					$currentPerson = $people[$index];
			?>
			<tr>
				<td><?php echo $currentPerson["id"]; ?></td>
				<td><?php echo $currentPerson["firstname"]; ?></td>
				<td><?php echo $currentPerson["lastname"]; ?></td>
				<td><?php echo $currentPerson["email"]; ?></td>
			</tr>
			<?php
					$index++;
				}
			?>
		</table>
	</body>
</html>