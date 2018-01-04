<?php
	set_time_limit(10);
	$pass_min = $_REQUEST["passMin"];
	$pass_spec = $_REQUEST["passSpec"];
	$pass_num = $_REQUEST["passNum"];
	$chars = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
	$spec_chars = array("!","@","#","$","%","^","&","*","(",")","-","_",",",".","?","/","'",":",";","+");
	$num_chars = array("0","1","2","3","4","5","6","7","8","9");
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Password Generator</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Password Generator</h1>
		<?php
			if ($pass_min == "" || $pass_spec == "" || $pass_num == ""){
		?>
				There was an error, please <a href="index.php">Click Here</a> and fill out all fields.
		<ol>
		<?php
			}else {
				for($counter=0; $counter < 5; $counter++){
					$password = array();
					for($index=0; $index < $pass_spec; $index++){
						$spec_char = mt_rand(0,(count($spec_chars)-1));
						array_push($password, $spec_chars[$spec_char]);
					}
					for($index=0; $index < $pass_num; $index++){
						$num_char = mt_rand(0,(count($num_chars)-1));
						array_push($password, $num_chars[$num_char]);
					}
					$rand = mt_rand($pass_min,20);
					while($rand >= count($password)){
						$char = mt_rand(0,(count($chars)-1));
						array_push($password, $chars[$char]);
					}
					shuffle($password);
		?>
			<li>
				<?php 
					foreach($password as $pass){
						echo $pass;} 
				?>
			</li>
		<?php
				}
			}
		?>
		</ol>
	</body>
</html>