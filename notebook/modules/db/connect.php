<?php

namespace modules\db;

class connect
{
    public static $result;
    protected static $db;

    public static function start()
    {
        $config = require_once "config/db.php";

        if ($config['enable']) {

                self::$db = mysqli_connect("$config[host]", "$config[username]", "$config[password]");
                mysqli_query(self::$db, "CREATE DATABASE IF NOT EXISTS $config[name_db]");
                echo(mysqli_error(self::$db));
                self::$db = mysqli_connect("$config[host]", "$config[username]", "$config[password]", "$config[name_db]");
                mysqli_query(self::$db,"CREATE TABLE IF NOT EXISTS posts (id INTEGER  AUTO_INCREMENT PRIMARY KEY, Header TEXT NOT NULL , Title TEXT NOT NULL , video TEXT NOT NULL , preview TEXT NOT NULL );");
            

            
        }
    }
}
