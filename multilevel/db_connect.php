<?php

class database{
	var $host ="localhost";
	var $username ="root";
	var $password ="";
	var $database ="carisekolah";
	var $koneksi;

	
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
	}


	function register($username,$password,$gmail,$level)
	{
		$insert = mysqli_query($this->koneksi, "insert into loginmulti values ('','$username','$gmail','$password','$level')");
		return $insert;
	}

	function login($gmail,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from loginmulti where gmail='$gmail'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{

			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('gmail', $data_user['gmail'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['gmail'] = $data_user['gmail'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from loginmulti where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['gmail'] = $data_user['gmail'];
		$_SESSION['is_login'] = TRUE;
	}
}