<?php
require "Model.php";
class Movie extends Model {
	public $movie_id;
	public $movie_name;
	public $movie_ganre;
	public $movie_year;
	public $movie_producer;
	
	public function __construct(){
		$this->table = "movies";
		$this->timestamps = true;
		parent::__construct();
	} 
	
	public function getActions(){
	
	}
	/*public function getAllMovies(){
		$res = DB::getInstance()->select('movies',['id','name','ganre'], 'id > 0');
		var_dump($res);
	}
	
	public function insertMovie(){
		$res = DB::getInstance()
		->insert('movies',['name' => '"Titanik"', 'year' => 1996, 'ganre' => '"Action"', 'producer' => '"Pera Peric"']);
		var_dump($res);
	}
	
	public function deleteMovie(){
		$res = DB::getInstance()->del('movies',39);
		var_dump($res);
	}
	
	public function updateMovie(){
		$res = DB::getInstance()
		->update('movies',['name' => '"Titanik"', 'year' => 1999, 'producer' => '"Pera Markovic"'],39);
		var_dump($res);
	}*/
	
	/*public function getAll(){
		$connection = mysqli_connect("localhost","root","Jovana_1997@","db_movie");
		$res = mysqli_query($connection, "SELECT * FROM movies");
		$all_movies = array();
		while($row = mysqli_fetch_row($res)){
			$all_movies[] = $row;	
		}
		return $all_movies;
	}*/
	/*public function __construct($name,$ganre,$year,$producer){
		$this->movie_name = $name;
		$this->movie_ganre = $ganre;
		$this->movie_year = $year;
		$this->movie_producer = $producer;
	}*/
	
	/*public function getAllMovies(){
		$connection = mysqli_connect(DB_HOST_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM movies";
		$result = mysqli_query($connection, $query);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "movie id:" . $row["id"] . "<br>- Name: " . $row["name"] . "<br>- Ganre: " . $row["ganre"] . "<br>- Year: " . $row["year"] .
				"<br>- Producer: " . $row["producer"]. 
				"<form action='delete.php' method='POST'>
				<input type='submit' name='del' value='delete'>
				<input type='hidden' name='hd_input' value=''>
				</form><br>";
			}
		}else{
			echo "Result not found.";
		}
		 mysqli_close($connection);
	}*/
	
	 /*public function insertMovie(){
		 $connection = mysqli_connect(DB_HOST_NAME, DB_USERNAME,DB_PASSWORD, DB_NAME);
		 $query = "insert into movies values(null,'{$this->movie_name}','{$this->movie_ganre}','{$this->movie_year}','{$this->movie_producer}')";
		 mysqli_query($connection,$query);
		 mysqli_close($connection);
	}*/
	
	/*public function deleteMovie(){
		$connection = mysqli_connect(DB_HOST_NAME, DB_USERNAME,DB_PASSWORD, DB_NAME);
		$query = "delete from movies where id='{$this->movie_id}'";
		 mysqli_query($connection,$query);
		 mysqli_close($connection);
	}*/

	/*public function searchMovie($param){
		$connection = mysqli_connect(DB_HOST_NAME, DB_USERNAME,DB_PASSWORD, DB_NAME);
		$res = mysqli_query($connection,"select * from movies where name like '%$param%'");
		$movie = mysqli_fetch_row($res);
		return $movie;
	}*/
	
	/*public function updateMovie(){
		$connection = mysqli_connect(DB_HOST_NAME, DB_USERNAME,DB_PASSWORD, DB_NAME);
		mysqli_query($connection, "update movies set name='{$this->movie_name}',ganre='{$this->movie_ganre}',year='{$this->movie_year}',producer='{$this->movie_producer}' where id='{$this->movie_id}'");
	}*/
	
	/*public function getMovieById($id){
		$this->movie_id = $id;
		$connection = mysqli_connect(DB_HOST_NAME, DB_USERNAME,DB_PASSWORD, DB_NAME);
		$query = "select from movies where id ='{$this->movie_id}'";
		$res = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($res)){
			echo "movie id:" . $row["id"] . "<br>- Name: " . $row["name"] . "<br>- Ganre: " . $row["ganre"] . "<br>- Year: " . $row["year"] .
			"<br>- Producer: " . $row["producer"];
		return $movie;
		
	}*/
}