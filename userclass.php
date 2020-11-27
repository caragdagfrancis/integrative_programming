<?php

class User
{
    public $name;
    public $username;
    public $email;

    function friend($name)
    {
        echo "$name" , " is a friend";
    }
    function status($name)
    {
        echo "$name" , " posted a new status";
    }
    

}

$example = new User();
echo $example -> friend("Francis Caragdag") . "<br>";
echo $example -> status("Francis Caragdag") . "<br>";
?>