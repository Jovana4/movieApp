<?php

require "config.php";

if(isset($_POST['btn_del'])){
	$delMovie = new Movie();
	$delMovie->movie_name = $_POST['movieName'];
	