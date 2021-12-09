<?php
spl_autoload_register(function ($class) {
    $fn = __DIR__ . '/../../../src/' . str_replace('\\', '/', $class) . '.php';
    require_once $fn;
});
use MX\Controller\UserController;
use MX\View\Form\UserForm;
use MX\Models\Session\UserSession;

include '../config/config.php';

$userSession = new UserSession();
$username = $userSession->getSession('Username');

?>
<html>
<head>
	<link href="/public/emmex.css" rel="stylesheet" type="text/css"/>
</head>
<body>	

<?php if(!$username) {
	header('location:/public/index.php');
	}
?>
<?php if($username):?>
   <body>
<section id="container">
      <h1>Welcome  <?= $username; ?></h1> 
      <h2>List of Users</h2>
      
      <table>
      	<thead>
      		<tr>
      		<td>ID</td>
      		<td>Firstname</td>
      		<td>Lastname</td>
      		<td>Role</td>
      		</tr>
      	</thead>
      	<tbody>
      	 <?php $getUsers = new UserController();?>
      	 <?php $users = $getUsers->displayUsers($config);?>
      	 <?php while($row = $users->fetch(PDO::FETCH_ASSOC)) : ?>
      	 	<td><?=$row['id'];?></td>
      	 	<td><?=$row['Firstname'];?></td>
      	 	<td><?=$row['Lastname']?></td>
      	 	<td><?=$row['Role']?></td>
      	</tr>
      	<?php endwhile;?>
      	</tbody>
      </table>
      <?php echo UserForm::render();?>
   	</section>
   </body>
   <?php endif;?>
</html>
