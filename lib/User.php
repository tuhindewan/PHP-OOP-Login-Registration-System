<?php 

include_once('Session.php');
include_once('Database.php');
class User{
	private $db;
	public function __construct()
	{
		$this->db = new Database();
	}
	public function userRegistration($data)
	{
		$name     = $data['name'];
		$username = $data['username'];
		$password = md5($data['password']);
		$email    = $data['email'];
		$chk_mail = $this->emailCheck($email);

		if ($name=='' OR $username=='' OR $password=='' OR $email=='') {
			$msg = "<div class='alert alert-danger'><strong>ERROR !</strong>Field Must Not Be Empty</div>";
			return $msg;
		}
		if (strlen($username)<3) {
			$msg = "<div class='alert alert-danger'><strong>ERROR !</strong>username is too Short!</div>";
			return $msg;
		}elseif (preg_match('/[^a-z0-9_-]+/i', $username)) {
			$msg = "<div class='alert alert-danger'><strong>ERROR !</strong>Username must only contain alphanumerical, dashes and unserscore!</div>";
			return $msg;
		}
		if (filter_var($email,FILTER_VALIDATE_EMAIL)===false) {
			$msg = "<div class='alert alert-danger'><strong>ERROR !</strong>Email Address is not valid!</div>";
			return $msg;
		}

		if ($chk_mail==true) {
			$msg = "<div class='alert alert-danger'><strong>ERROR !</strong>Email Address already Exist!</div>";
			return $msg;
		}
		
	}

	public function emailCheck($email)
	{
		$sql = "SELECT email FROM tbl_user WHERE email =:email";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':email',$email);
		$query->execute();
		if ($query->execute() > 0) {
			return true;
		}
		else{
			return false;
		}

	}
}



?>