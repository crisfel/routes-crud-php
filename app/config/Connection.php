<?php

class Connection 
{

    public static function connect(string $server, string $user, string $password, string $database)
    {
        return mysqli_connect($server, $user, $password, $database);
    }

}



?>