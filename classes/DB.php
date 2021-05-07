<?php

class DB extends mysqli {
	private static $instance;
	
	public function __construct(){
		parent::__construct(DB_HOST_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
		$this->set_charset('utf8');
		if($this->connect_error){
			die("Error: " . $this->connect_error);
		}
	}
	
    public static function getInstance() {
        if ( self::$instance === null )
            self::$instance = new self();
        return self::$instance;
    }
	
	function executeRow($query){
		
        $result = $this->query($query);
		//var_dump($this->error);
		
        $rows = [];
        if ($result->num_rows == 0) {
            return false;
        }
        else{
            while ($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
	}
	
	public function select($table, array $columns = null, $where = null){
		$conn = self::getInstance();
		//$query = "SELECT $columns[0],$columns[1] FROM $table WHERE id=$where'";
		$query = "SELECT ";
		if ($columns) {
			foreach($columns as $key => $column) {
				if ($key + 1 < count($columns)) {
					$query .= $column . ", ";
				} else {
					$query .= $column;
				}
			}
		} else {
			$query .= " * ";
		}

		
		$query .= " FROM ". $table;
		
		if($where != null){
			$query .= " WHERE " .$where;
		}
		
		$result = $this->executeRow($query);
		//var_dump($query);
		return $result;
	}
	
	public function insert($table, array $columnValue, $withId = false){
		$conn = self::getInstance();
		$a=count($columnValue);
		$i=1;
		
		$keys="";
		$values="";
		
		$query = "INSERT INTO " . $table . " (";
		
		foreach($columnValue as $key => $value) {
			 if($i<$a){
				$keys .=$key . ", ";
				$values .=$value . ", ";
				$i++;
			 } else {
				$keys .=$key . ")";
				$values .=$value . ")";
			 }
		}
		
		$query .= $keys;
		
		$query .=" VALUES (";
		
		$query .= $values;
        $response = $this->query($query);
		if ($withId) {
            return $conn->insert_id;
        } else {
            return $response;
        }
	}
	
	public function del($table, $id){
		$conn = self::getInstance();
		$query = "DELETE FROM " . $table . " WHERE id = " . $id;
		var_dump($query);
		return $this->query($query);
	}

	public function update($table, array $columnValue, $id){
		$conn = self::getInstance();
		$a=count($columnValue);
		$i=1;
		
		$query = "UPDATE " . $table . " SET ";
		
		foreach($columnValue as $key => $value) {
			if($i<$a){
				$query .=$key ." = " .$value . ", ";
				$i++;
			} else {
				$query .=$key ." = " .$value;
			}
		}
		$query .=" WHERE id = " . $id;
		$response = $this->query($query);
		//var_dump($this->error);
		return $response;
	}
}
?>