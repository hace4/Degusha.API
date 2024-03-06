<?php


use modules\METHOD_modules\POST_validation;


$path =  require_once "config/config.php";

POST_validation::validation($path) ;


if ( json_decode(POST_validation::$message, true)['status']){ 
    http_response_code(201);
    die(POST_validation::$message);
}else{
    http_response_code(200);
    echo POST_validation::$message;

}
