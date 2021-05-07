<?php
require "DB.php";

class Model{
	protected $db;
	protected $table;
	protected $timestamps = false;
	static $timestampFormat = "'Y-m-d H:m:s'";
	
	public function __construct(){
		$this->db = DB::getInstance();
		
	}
	
	public function select(array $columnValue = null, $where = null){
		return $this->db->select($this->table, $columnValue, $where);
	}

	public function all(array $columnValue = null){
		return $this->db->select($this->table, $columnValue);
	}
	
	public function create(array $columnValue, $withId = false){
		
		if ($this->timestamps) {
			$columnValue['created_at'] = date(self::$timestampFormat);
			$columnValue['updated_at'] = date(self::$timestampFormat);
		}
		return $this->db->insert($this->table, $columnValue, $withId);
	}
	
	public function update(array $columnValue, $id){
		if ($this->timestamps) {
			$columnValue['updated_at'] = date(self::$timestampFormat);
		}
		return $this->db->update($this->table, $columnValue, $id);
	}
	
	public function del($id){
		return $this->db->del($this->table, $id);
	}
}

?>