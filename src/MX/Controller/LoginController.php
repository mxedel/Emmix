<?php
namespace MX\Controller;
use MX\Models\User\UserFactory;
use MX\Models\DB\DB;
class LoginController
{
	
    public function login()
    {
	if(isset($_POST['login'])){
	
		$fname = trim($_POST["username"]);
		$password = trim($_POST['password']);
		
	      $db = new DB();
	      $db = $db->dbConnection();
	      $sql = "SELECT id FROM users WHERE firstname = '$fname' and password = '$password'";
	      $result = mysqli_query($db,$sql);
	      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	      $count = mysqli_num_rows($result);
	      
	      if($count == 1) {
      		session_start();
		 $_SESSION['login_user'] = $fname;
		 header("location: /src/MX/View/dashboard.php");
	      }else {
		 $error = "Your Login Name or Password is invalid";
		 return $error;
	      }

	}
    }
}
