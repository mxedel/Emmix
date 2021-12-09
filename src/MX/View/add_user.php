<?php
include '../Controller/UserController.php';
include '../Models/User/UserFactory.php';
include '../Models/User/User.php';
include '../Models/DB/DB.php';
include '../config/config.php';
use MX\Controller\UserController;
if (!empty($_POST['addUser'])) {
$addUser = new UserController();
$result = $addUser->user($config);

}?>
