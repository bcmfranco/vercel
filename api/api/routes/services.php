<?php
/************************************ WELCOME *******************************/
$app->get('/welcome/', function ($request, $response, $args) { // Devuelve posición de todos los satélites

    $welcome_message = "Bienvenido a la ApiRest StarWars";
    
    $response->write($welcome_message);

    $response->withStatus(200);

    return $response;

});

/************************************ GET SATELITES *******************************/

$app->get('/locations/', function ($request, $response, $args) { // Devuelve posición de todos los satélites

    if(!defined('SATELITES')){

        return $response->withStatus(400)
                        ->withJson(array(
                            'code' => 400,
                            'msj' => "Satelites not founded"
                        ));

    } else {

        $data = SATELITES;

    }
    
    return $response->withStatus(200)
                    ->withJson($data);


})->setName('locationsGet');

/************************************ GET SATELITE *******************************/

$app->get("/location/[{name}/]", function ($request,$response,$args){ // Devuelve la posición de un satélite

    $inputData = $request->getParsedBody();
    $name = $inputData["name"];
    
    $name = sanitize($name);

    if(!validate($name, "string")){

            return $response->withStatus(400)
            ->withJson(array(
                'code' => 400,
                'msj' => "Bad request",
                'error_detail' => "Name have to be a string"
            ));
    } 

    $name = convertize($name, "uppercase");

    if(!array_key_exists($name,SATELITES)){ // Si el satélite no existe, devuelvo el error

        return $response->withStatus(404)
                        ->withJson(array(
                            'code' => 404,
                            'msj' => "Satelite not founded"
                        ));

    } else {

        $position = new stdClass(); // Defino el objeto postion y le asigno coordenadas
        $position->x = SATELITES[$name][0];
        $position->y = SATELITES[$name][0];

        $data =  array(
            'name'=>$name,
            'position'=>$position
        );
    }

    return $response->withStatus(200)
                    ->withJson($data);


})->setName('locationGet');

/************************************ POST MESSAGE *******************************/

$app->post("/message/", function ($request,$response,$args){ // Envía mensaje

	$inputData = $request->getParsedBody(); 
    $message = $inputData['message'];

    $message = sanitize($message);

    if(!validate($message, "string")){

        return $response->withStatus(400)
                        ->withJson(array(
                            'code' => 400,
                            'msj' => "Bad request",
                            'error_detail' => "Name have to be a string"
                        ));
    } 

    if(!$message){

        return $response->withStatus(404)
                        ->withJson(array(
                            'code' => 404,
                            'msj' => "Bad request",
                            'error_detail' => "Incorrect format o value in request"
                        ));

    } else {

        $splited_message = explode(" ", $inputData['message']); // Parseo el input
        $parsed_message[0] = implode(", ", $splited_message);

        $data = $parsed_message;

        $data =  array(
                'message'=>$parsed_message
        );

    }

    return $response->withStatus(200)
                    ->withJson($data);


})->setName('messagePost');
