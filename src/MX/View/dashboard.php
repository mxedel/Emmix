<?php
spl_autoload_register(function ($class) {
    $fn = __DIR__ . '/../../../src/' . str_replace('\\', '/', $class) . '.php';
    require_once $fn;
});
use MX\Controller\UserController;
use MX\View\Form\UserForm;
session_start();
?>
<html>
<head>
	<link href="/public/emmex.css" rel="stylesheet" type="text/css"/>
</head>
<body>	

<?php if(!$_SESSION['login_user']) {
	header('location:/public/index.php');
	}
?>
<?php if($_SESSION['login_user']):?>
<section id="container">
   <body>
      <h1>Welcome  <?php echo $_SESSION['login_user']; ?></h1> 
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
      	 <?php $users = $getUsers->DisplayUsers();?>
      	 <?php while($row = mysqli_fetch_assoc($users)):?>
      	 	<td><?=$row['id'];?></td>
      	 	<td><?=$row['Firstname'];?></td>
      	 	<td><?=$row['Lastname']?></td>
      	 	<td><?=$row['Role']?></td>
      	</tr>
      	<?php endwhile;?>
      	</tbody>
      </table>
      
   	<?php echo UserForm::render();?>
   	<?php endif;?>
   </body>
   
</html>
