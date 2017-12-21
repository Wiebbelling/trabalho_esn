<?php

class Database {
	protected static $pdo = null;

   	public static function instance() {        
        if (!isset(self::$pdo)) {
        	self::$pdo = new PDO('mysql:host=localhost; dbname=construtora;', 'root', 'vicentao', array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));  
		}        
        return self::$pdo;
    }
    
	protected function __construct() {}
}