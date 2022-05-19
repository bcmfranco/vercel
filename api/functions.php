<?php

function validate($value, $arrow){ // Valida si el $value se corresponde con el tipo de variable $arrow
    
    $value = gettype($value);

    if($value == $arrow){
        $validate_response = true;
    } else {
        $validate_response = false;
    }

    return $validate_response;

}

function sanitize($value){ // Valida el tipo de dato para evitar la sql injection

    $type = gettype($value);

    switch ($type) {
        case "string":
            $value = strval($value);
            break;
        case "integer":
            $value = intval($value);
            break;
        case "double":
            $value = doubleval($value);
            break;
        default:
            $value = strval($value);
            break;
    }

    return $value;

}

function convertize($value, $target){ // Convierte el $value a la de notación indicada en $target

    switch ($target) {
        case "capitalize":
            $value = ucfirst($value);
            break;
        case "uppercase":
            $value = strtoupper($value);
            break;
        case "lowercase":
            $value = strtolower($value);
            break;
    }

    return $value;

}