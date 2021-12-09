<?php
namespace MX\Models\User;

class User
{
    public int $ident;
    public string $fname;
    public string $lname;
    public string $username;
    public string $email;
    public string $password;
    public string $role;
    public string $dateCreated;
    public function __construct($ident, $fname, $lname, $username, $email, $password, $role){
        $this->ident = $ident;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role  = $role;
        $this->dateCreated  =  Date("d-m-Y");
    }
}

