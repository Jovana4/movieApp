<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Movies</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" >
</head>

<body>
	<div id="wrapper">
		<div id="search">
			<form method="POST" action="search.php">
				<input type="text" name="search" placeholder="Search...">
				<input type="submit" name="btn_search" value="Search">
			</form>
			<form class="btn" method="POST" action="create.html">
				<input type="submit" name="btn_" value="Create">
			</form>
		</div>
		<div id="result">
			<?php
				require "config.php";
				
				$movie = new Movie();
				//$movies->getAllMovies();
				$movies = $movie->all();
				var_dump($movies);
				//$movie->create(['name' => '"Titanik"', 'year' => 1997, 'ganre' => '"Action"', 'producer' => '"Pera Peric"']);
				//$movie->del(40);
				//$movie->update(['name' => '"Titanik"', 'year' => 1999, 'producer' => '"Pera Markovic"'],49);
				//$movies->deleteMovie();
				//$movies->updateMovie();
			?>
		</div>
		<div id="footer">-----footer-----</div>
	</div>

</body>

</html>