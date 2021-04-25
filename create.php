<?php

require "config.php";

if(isset($_POST['btn_create'])){
	$newMovie = new Movie();
	$newMovie->movie_name = $_POST['movieName'];
	$newMovie->movie_ganre = $_POST['movieGanre'];
	$newMovie->movie_year = $_POST['movieYear'];
	$newMovie->movie_producer = $_POST['movieProducer'];
	
	$newMovie->insertMovie();
	
	header("Location: index.php");
	exit();
}
?>

<form method="POST" action="">
	<label>Enter movie name: </label>
	<input type="text" name="movieName"><br>
	<label>Enter movie ganre: </label>
	<input type="text" name="movieGanre"><br>
	<label>Year of production: </label>
	<input type="text" name="movieYear"><br>
	<label>Producer: </label>
	<input type="text" name="movieProducer"><br>
	<input type="submit" name="btn_create" value="Submit">
</form>
