<?php

$request = $_SERVER['REQUEST_URI'];
echo $request;

switch ($request) {
    case '/pruebas/':
        require "../index.php";
        break;

    case '/pruebas/calculadora':
        require "../calculadora.php";
        break;
    
    default:
        http_response_code(404);
        require "404.php";
        break;
}