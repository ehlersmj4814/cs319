<?php
	$num_1 = $_REQUEST["num1"];
	$num_2 = $_REQUEST["num2"];
	$operation = $_REQUEST["operator"];
	$answer;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Math</title>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
		function addition($a, $b) {
			$answer = $a + $b;
			return $answer;
		}
		function subtraction($a, $b){
			$answer = $a - $b;
			return $answer;
		}
		
		if ($operation == add){
			$answer = addition($num_1, $num_2);
		} elseif ($operation == subtract){
			$answer = subtraction($num_1, $num_2);
		}
	?>
	<p>Answer: <?php echo $answer?></p>
	</body>
</html>