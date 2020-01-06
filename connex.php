<?php 

class  Database
{
	private static $host="localhost";
	private static $dbname="patient";
	private static $user="fatou";
	private static $pass="passer";
	
	private static $db=null;

	public static function db(){
		try {
	self::$db = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname, self::$user, self::$pass);
} catch (PDOException $e) {
	echo "Connection failed : ". $e->getMessage();
}
return self::$db;
	}
	public static function discon(){
		self::$db=null;
	}

}
Database::db();
?>