<?php

class Model
{
	protected $db;
	function __construct() 
	{
		$this->connect();
	}
	protected function connect()
	{
		try {
			$this->db = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_TABLENAME, DB_USERNAME, DB_PASSWORD);
			$this->db->query('set names utf8;');
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			/* displaying the error page over here. */
		}
	}
}