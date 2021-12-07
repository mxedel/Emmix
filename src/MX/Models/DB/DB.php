<?php
namespace MX\Models\DB;
class DB{


	public string $servername;
	public string $username;
	public string $password;
	public string $dbname;
	
	public function dbConnection()
	{
		$servername = "localhost";
		$username = "vagrant";
		$password = "vagrant";
		$dbname = "Emmix";
		   
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		return $conn;
	}

}
