<?php
namespace MX\Models\User;

use MX\Models\DB\db;
class UserFactory 
{
    public function createUser($ident, $fname, $lname, $password, $role)
    {
	    $user =  new User($ident, $fname, $lname, $password, $role);
    		$user->dateCreated = date('Y-m-d H:i:s');
		$servername = "localhost";
		$username = "vagrant";
		$password = "vagrant";
		$dbname = "Emmix";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		$sql = "INSERT INTO users (id, Firstname, Lastname, Role, Password, Created)
		VALUES ('$ident', '$fname', '$lname', '$role', '$password', '$user->dateCreated')";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
		mysqli_close($conn);
    }
}

