<?php

use modules\METHOD_modules\DELETE_modules;

$params = explode('/', $_GET['q']);

DELETE_modules::check($params[0]);


switch (json_decode(DELETE_modules::$message, true)['status']) {
    case 'not found':
        http_response_code(404);
        break;

    case 'bad request':
        http_response_code(400);
        break;

    default:
        http_response_code(200);
        break;
}
