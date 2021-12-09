<?php
namespace MX\Models\DB;

use PDO;
use PDOException;
use Throwable;
class DB{


	public string $servername;
	public string $username;
	public string $password;
	public string $dbname;
	
	public function dbConnection($config)
	{
		$dbusername 	= $config['dbusername'];
		$dbpassword 	= $config['dbpassword'];
		$dbservername 	= $config['servername'];
		$dbname 	= $config['dbname'];
		$dsn = 'mysql:host=localhost;dbname=' . $dbname;
		try {
		    $conn = new PDO($dsn, $dbusername, $dbpassword);
		} catch (Throwable $t) {
		   error_log($t->getMessage());
		   $conn = FALSE;
		}
		return $conn;
	}

}
