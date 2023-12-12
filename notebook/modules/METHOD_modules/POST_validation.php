<?php

namespace modules\METHOD_modules;

use modules\db\creat;
use modules\METHOD_modules\method;


class POST_validation extends method
{
    /**
    *@param array $params  POST params 
    *@param json $message  server answer 
    */

    private static function check_void_params($params, $path) 

    {
        var_dump($params);
        if (array_key_exists('Header', $params) && array_key_exists('Title', $params) && array_key_exists('video', $_FILES) && array_key_exists('preview', $_FILES) ){
            move_uploaded_file($_FILES['video']["tmp_name"], "../" . $path . hash('md2', trim($_FILES['video']["name"] )));
            move_uploaded_file($_FILES['preview']["tmp_name"], "../" . $path . hash('md2', trim($_FILES['preview']["name"]) ));
            creat::add_data($_POST['Header'], $_POST['Title'], self::uri($path) . hash('md2', trim($_FILES['video']["name"] )), self::uri($path)  . hash('md2', trim($_FILES['preview']["name"]) ) );

            self::$message = json_encode(['message' => 'Created ', 'status' => True]);
            

        }
       else {
           self::$message = json_encode(['message' => 'not valid request', 'status' => false]);
       }
    }

    public static function validation($path)
    {
        self::check_void_params($_POST, $path);
    }
}
