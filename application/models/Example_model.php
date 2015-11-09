<?php

class Example_model extends Model
{
	public function __construct()
	{
		parent::__construct();
		//load database
		//$db = $this->connect();
	}
	public function example_MySQL($row1, $row2)
	{
		global $query;
		$query = 'SELECT `'.$row1.'`,`'.$raw2.'` FROM `TABLE`';
		$do = $this->db->prepare($query);
		$do->execute();
		return $do->fetchAll(PDO::FETCH_ASSOC);
	}
	public function example_Text($input)
	{
		$text = 'Hi, '.$input.'! This text is fetch from model.';
		return $text;
	}
}


