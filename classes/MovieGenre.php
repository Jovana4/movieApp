<?php

class MovieGenre extends Model {
	
	public function __construct(){
		$this->table = "movie_genre";
		$this->timestamps = true;
		parent::__construct();
	} 
}

?>