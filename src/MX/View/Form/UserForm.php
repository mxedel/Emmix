<?php
namespace MX\View\Form;

class UserForm
{
    public static function render()
    {
        return <<<EOT
<form method="post" action="add_user.php">

<div><label>Username:</label><input type="text" name="username" value="Gordon"/></div>
<div><label>Firstname:</label><input type="text" name="fname" value="Gordon"/></div>
<div><label>Lastname:</label><input type="text" name="lname" value="Ramsay"/></div>
<div><label>Email:</label><input type="text" name="email" value="fourthemail@gmail.com"/></div>
<div><label>Password:</label><input type="password" name="password" value="password"/></div>
<div><label>Role:</label><input type="text" name="role" value="Author"/></div>
<input type="submit" name="addUser" />
</form>
EOT;
    }
}
