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
				//$movies = $movie->all();
				//var_dump($movies);
				$movie->create(['name' => '"Phoenix"', 'year' => 1997, 'genre' => [1], 'producer' => 1]);
				//$movie->del(50);
				//$movie->update(['name' => '"Titanik"', 'year' => 1999, 'producer' => '"Pera Markovic"'],49);
				//$genre = new Genre();
				//var_dump($genre);
				//$genre->create(['name' => '"animated"']);
				//$genre->del(1);
				//$genre->update(['name' => '"action"'],2);
				//$genres = $genre->all();
				//var_dump($genres);
                //$producer = new Producer();
                //$producer->create(['name' => '"Cameron"']);
                //$producer->update(['name' => '"James Cameron"'],2);
                //$producers = $producer->all();
                //var_dump($producers);
			?>
		</div>
		<div id="footer">-----footer-----</div>
	</div>

</body>

</html>