<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require('lib/vendor/autoload.php');
require('../common.php');
require('functions.php');

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Middelware
$path = '/starwars/api/';
if(isset($_SERVER['HTTP_KEY'])){ // Key enviada en Headers
    $key = $_SERVER['HTTP_KEY'];
} 

$service_path = explode("/", explode($path, $_SERVER['REQUEST_URI'])[1])[0]; // Relative path del servico
$service_auth = AUTH_LIST[$service_path]; // Perfil de autorización que requiere ese servicio

if(!empty($service_auth)){ // Si tiene perfil de autorización

    if(empty($key) || !in_array($key, $service_auth)) { // Si el perfil de autorización no contiene la key pasada
        
        $response = new stdClass();

        $response->withStatus = 401;
        $response->withJson = [
            'code' => 401,
            'msj' => "Unauthorized"
        ];

        print_r($response);exit;

    } 

}
////////

// Incluyo los recursos
require "routes/services.php";

// Run app
$app->run();


