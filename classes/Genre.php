<?php
require "Model.php";

class Genre extends Model {

    public function __construct(){
        $this->table = "genre";
        $this->timestamps = true;
        parent::__construct();
    }
}
?>
