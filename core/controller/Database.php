<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b7500c6158bb82";$this->pass="b9e246a2";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_f76647701be220a";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
