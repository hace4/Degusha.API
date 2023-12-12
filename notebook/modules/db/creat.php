<?php
namespace modules\db;

use modules\db\connect;


class creat extends connect{
    /**
    *@hace4
    *method for sql insert request
    *@param string  $Header
    *@param string  $Title
    *@param string  $Video
    *@param string  $preview
    */
    public static function add_data($Header, $Title, $Video, $preview){
        mysqli_query(self::$db, "INSERT INTO `posts` (`id`, `Header`, `Title`, `video`, `preview`) VALUES  (NULL, '$Header', '$Title', '$Video', '$preview')");

    }   
}