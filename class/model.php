<?php

class Model {
	
	
	
	public function insertExcel($arr) {
		
		$fields = '';
		
		foreach($arr[2] as $key => $cell) {
			$fields .= '`'.$key.'`'.',';
		}	
		$fields = trim($fields,',');
		
		$str = '';
		// INSERT INTO `user` (``,``,``..) VALUES ('','','',),(),(),();
		foreach($arr as $item) {
			$str .= "(";
			foreach($item as $cell) { 
				$str .= "'".$this->db->real_escape_string($cell)."',";
			}
			$str = trim($str,",");
			$str .= "),";
		}
		$str = trim($str,",");
		$query = "INSERT INTO `user` (".$fields.") VALUES ".$str;
		
		$result = $this->db->query($query);
		if($result) {
			return TRUE;
		}
	
	}
	
	
	
	public function connect() {
		$this->db = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		if($this->db->connect_error) {
			throw new Exception("Ошибка соединения : ".$this->db->connect_errno."|".iconv("CP1251","UTF-8",$this->db->connect_error));
		}
		
		$this->db->query("SET NAMES 'UTF8'");
	}
	
	public function __construct() {
		try {
			$this->connect();
		}
		catch(\Exception $e) {
			echo $e->getMessage();
			exit();
		}	
	}
}
?>