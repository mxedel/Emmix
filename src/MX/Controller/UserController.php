<?php
namespace MX\Controller;
use MX\Models\User\UserFactory;
use MX\Models\DB\DB;
class UserController
{
    public function user($config)
    {
		$min = 1;
		$max = 1000;
		$newuser = NULL;
		$factory = new UserFactory();
		$ident = rand($min,$max);
		$fname = $_POST['fname'] ?? '';
		$lname = $_POST['lname'] ?? '';
		$username = $_POST['username'] ?? '';
		$email = $_POST['email'] ?? '';
		$role = $_POST['role'] ?? '';
		$password = $_POST['password'] ?? '';
		$regex = "/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
		if(preg_match($regex, $email)){
			$newuser = $factory->createUser($ident, $fname, $lname, $username, $email, $password, $role, $config);
		}
    }
    
    public function displayUsers($config)
    {
	      $db = new DB();
	      $conn = $db->dbConnection($config);
	      $sql = "SELECT * FROM users";
	      $result = $conn->query($sql);
	      return $result;
    }
}
