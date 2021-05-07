<?php

class Movie extends Model {
	
	public function __construct(){
		$this->table = "movies";
		$this->timestamps = true;
		parent::__construct();
	}

    public function create(array $columnValue, $withId = false){

	    $genres = $columnValue['genre'];
        unset($columnValue['genre']);
	    $producers = $columnValue['producer'];
        unset($columnValue['producer']);
        $id = parent::create($columnValue, true);
        var_dump($id);
        $mg = new MovieGenre();
        foreach($genres as $genre){
            $mg->create(['movie_id' => $id, 'genre_id' => $genre]);
        }
        $mp = new MovieProducer();
        $mp->create(['movie_id' => $id, 'producer_id' => $producers]);
    }

    public function update(array $columnValue, $id){
        $genres = $columnValue['genre'];
        unset($columnValue['genre']);
        $producers = $columnValue['producer'];
        unset($columnValue['producer']);
        parent::update($columnValue, $id);

        $mg = new MovieGenre();
//        $query = "SELECT id FROM movie_genre WHERE movie_id =". $id;
        $where = 'movie_id ='. $id;
        $existingGenres = $mg->select(['id'], $where);
        var_dump($existingGenres);

    }
}