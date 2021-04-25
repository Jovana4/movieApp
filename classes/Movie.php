<?php
require "Model.php";
class Movie extends Model {
	
	public function __construct(){
		$this->table = "movies";
		$this->timestamps = true;
		parent::__construct();
	} 
}