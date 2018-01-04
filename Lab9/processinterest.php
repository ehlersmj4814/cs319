<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Process Interest</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Calculate Simple Interest</h1>
		<?php
			$princ = $_REQUEST["principal"];
			$int_rate = $_REQUEST["interestRate"];
			$num_years = $_REQUEST["numberOfYears"];
			$answer = interest($princ, $int_rate, $num_years);
			function interest($P, $r, $t){
				$A = ($P*(1+($r*$t)));
				return $A;
			}
			echo "<p>After ".$num_years." years, an investment of $".$princ." at a ".($int_rate*100)."% interest rate will be worth $".$answer."</p>";
		?>
	</body>
</html>