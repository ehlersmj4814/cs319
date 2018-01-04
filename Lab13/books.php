<?php 
	set_time_limit(5); 
	$author_num = $_REQUEST["author"];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Henry's Books</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Henry's Books</h1>
		<?php
			$database = new PDO("mysql:host=dario.cs.uwec.edu;dbname=SIASMJ;charset=UTF-8", "SIASMJ", "YHZLFPZA", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$booksByQuery = "SELECT author_last, author_first FROM henry_author WHERE author_num = $author_num";
			$booksQuery = "SELECT henry_book.book_code AS code, title FROM henry_book INNER JOIN henry_wrote ON henry_book.book_code = henry_wrote.book_code WHERE author_num = $author_num";
			$author = $database->query($booksByQuery)->fetch();
			$books = $database->query($booksQuery)->fetchAll();
		?>
		<h2>Books by <?php echo $author["author_first"]." ".$author["author_last"]; ?></h2>
		<table border="1">
			<tr>
				<th>Code</th>
				<th>Title</th>
			</tr>
	<?php 
		foreach ($books as $book){
	?>
		<tr>
			<td><?php echo $book["code"]; ?></td>
			<td><?php echo $book["title"]; ?></td>
		</tr>
	<?php
		}
	?>
	</body>
</html>