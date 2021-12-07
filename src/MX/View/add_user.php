<?php
spl_autoload_register(function ($class) {
    $fn = __DIR__ . '/../../../src/' . str_replace('\\', '/', $class) . '.php';
    require_once $fn;
});
use MX\Controller\UserController;
use MX\View\Form\UserForm;

$user   = NULL;
if (!empty($_POST['submit'])) {
   $controller = new UserController();
   $user = $controller->user();
   // later store user in the database
} else {
    echo UserForm::render();
}
// later retrieve list of users from the database and display
