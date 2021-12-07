<?php
namespace MX\Controller;
use MX\Models\User\UserFactory;
use MX\Models\DB\DB;
class UserController
{
    public function user()
    {
		$min = 1;
		$max = 1000;
		$newuser = NULL;
		$factory = new UserFactory();
		$ident = rand($min,$max);
		$fname = $_POST['fname'] ?? '';
		$lname = $_POST['lname'] ?? '';
		$role = $_POST['role'] ?? '';
		$password = $_POST['password'] ?? '';
		$newuser = $factory->createUser($ident, $fname, $lname, $password, $role);
    }
    
    public function DisplayUsers()
    {
	      $db = new DB();
	      $db = $db->dbConnection();
	      $sql = "SELECT * FROM users";
	      $result = mysqli_query($db,$sql);
	      return $result;
    }
}
