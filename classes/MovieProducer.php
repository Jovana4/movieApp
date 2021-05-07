<?php


class MovieProducer extends Model{

    public function __construct(){
        $this->table = "movie_producer";
        $this->timestamps = true;
        parent::__construct();
    }
}