<?php 

namespace MX\Models\Session;
class UserSession
{
    public function setSession($key, $value) : string
    {
        session_start();
        $session = $_SESSION[$key] = $value;
        return $session;
    }
    
    public function getSession($key) : string
    {
    	session_start();
        if (isset($_SESSION[$key])){
		return $_SESSION[$key];
        }
        
        return false;
    }
}
