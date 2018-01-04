<?php set_time_limit(5); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Henry's Books</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Henry's Books</h1>
		<h2>Search by Author</h2>
		<?php
			$database = new PDO("mysql:host=dario.cs.uwec.edu;dbname=SIASMJ;charset=UTF-8", "SIASMJ", "YHZLFPZA", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$authorQuery = "SELECT author_num, author_last, author_first FROM henry_author ORDER BY author_last, author_first";
			$authors = $database->query($authorQuery)->fetchAll();
		?>
		<form id="search" name="search" method="get" action="books.php">
			<select name="author" id="author">
				<?php
					$index=0;
					while ($index < count($authors)){
						$currentAuthor = $authors[$index];
				?>
						<option value="<?php echo $currentAuthor["author_num"]; ?>">
							<?php echo $currentAuthor["author_last"].", ". $currentAuthor["author_first"]; ?>
						</option>
				<?php
						$index++;
					}
				?>	
			</select>
			<p><input type="submit" id="submit" name="submit" value="Query Author"></p>
		</form>
	</body>
</html>