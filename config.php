<?php
class database{
	private $hostname = 'localhost';
	private $username = 'root';
	private $password = '';
	private $db_name = 'task';
	private $connect;

	public function __construct(){
		$this -> connect = mysqli_connect($this -> hostname, $this -> username, $this -> password, $this -> db_name);

		if(!$this -> connect){
			echo 'Database not found';
		}
	}

	public function insert($table, $column, $columnName){
		if($this->connect){
			
			$sql = "INSERT INTO $table($column) VALUES ($columnName)";
			$query = mysqli_query($this -> connect, $sql);
			return $query;

		}else{
			echo 'Error';
		}
	}

	public function createColumn($table, $columnName){
		$sql = "ALTER TABLE $table ADD $columnName VARCHAR(52) NOT NULL";
		$query = mysqli_query($this -> connect, $sql);
		return $sql;
	}
}