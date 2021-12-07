<?php
namespace MX\Models\User;

class User
{
    public int $ident;
    public string $fname;
    public string $lname;
    public string $password;
    public string $role;
    public string $dateCreated;
    public function __construct($ident, $fname, $lname, $password, $role){
        $this->ident = $ident;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->password = $password;
        $this->role  = $role;
        $this->dateCreated  =  Date("d-m-Y");
    }
}

