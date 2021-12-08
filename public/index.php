<?php
// autoloader
//require __DIR__ . '/../vendor/autoload.php';
spl_autoload_register(function ($class) {
    $fn = __DIR__ . '/../src/' . str_replace('\\', '/', $class) . '.php';
    require_once $fn;
});

use MX\Controller\LoginController;
use MX\Controller\DashboardController;
use MX\View\Form\LoginForm;

?>
<html>
<head>
	<link href="emmex.css" rel="stylesheet" type="text/css"/>
</head>
<body>	
<section id="container">
<?php
   if (!empty($_POST['login'])) {
        $controller = new LoginController();
        $result = $controller->login();
        echo $result;
        echo LoginForm::render();
} else {
	?>
	<h1>Welcome at EMMEX</h1>
	<p>Please login</p>
         <?php
         echo LoginForm::render();
     }
 

?>
</section>
</body>
</html>
