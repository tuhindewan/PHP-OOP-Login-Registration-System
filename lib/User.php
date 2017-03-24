<?php 

include_once('Session.php');
include_once('Database.php');
class User{
	private $db;
	public function __construct()
	{
		$this->db = new Database();
	}
}



?>