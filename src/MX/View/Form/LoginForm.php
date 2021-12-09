<?php
namespace MX\View\Form;

class LoginForm
{
    public static function render()
    {
        return 
		<<<EOT
		<form class="loginform" method="post" action="/public/index.php">
		<div><label>Username:</label><input type="text" name="username" /></div>
		<div><label>Password:</label><input type="password" name="password"/></div>
		<input type="submit" name="login"/>
		</form>
		EOT;
    }
}
