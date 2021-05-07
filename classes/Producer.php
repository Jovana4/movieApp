<?php
require "Model.php";

class Producer extends Model {

    public function __construct(){
        $this->table = "producer";
        $this->timestamps = true;
        parent::__construct();
    }
}
