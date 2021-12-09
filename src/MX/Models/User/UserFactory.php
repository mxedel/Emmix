<?php
namespace MX\Models\User;
use PDO;
use PDOException;
use MX\Models\DB\db;
class UserFactory 
{
    public function createUser($ident, $fname, $lname, $username, $email, $password, $role, $config)
    {
	    $user =  new User($ident, $fname, $lname, $username, $email, $password, $role);
    		$user->dateCreated = date('Y-m-d H:i:s');
	
	      $db = new DB();
	      $conn = $db->dbConnection($config);
	      	$sql = "INSERT INTO users (id, email, Username, Firstname, Lastname, Role, Password, Created)
		VALUES ('$ident', '$email', '$username', '$fname', '$lname', '$role', '$password', '$user->dateCreated')";

	      $result = $conn->query($sql);
		if ($result) {
			header('Location:dashboard.php');
		} 
    }
}

