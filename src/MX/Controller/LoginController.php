<?php
namespace MX\Controller;
use MX\Models\User\UserFactory;
use MX\Models\DB\DB;
use MX\Models\Session\UserSession;
use PDO;
use PDOException;
class LoginController
{
	
    public function login($config)
    {
	if(isset($_POST['login'])){
		$usr = trim($_POST["username"]);
		$password = trim($_POST['password']);
	      $db = new DB();
	      $conn = $db->dbConnection($config);
	      $sql = "SELECT id FROM users WHERE Username = '$usr' and password = '$password'";
	      $result = $conn->query($sql);
	      $row = $result->fetch(PDO::FETCH_ASSOC);
	      if(count($row) == 1) {
	      
      		 $userSession = new UserSession();
		 $setUserSession = $userSession->setSession('Username', $usr);
		 header("location: /src/MX/View/dashboard.php?usr=$usr");
	      }else {
		 $error = "Your Login Name or Password is invalid";
		 return $error;
	      }

	}
    }
}
