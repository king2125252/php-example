<?php

function routeRequest()
{
    $request = $_SERVER['REQUEST_URI'];
    echo $request;

    switch($request){
        case '/':
        case '/home':
            require 'controller/HomeController.php';
            HomeController::index();
            break;

        case '/about':
            require 'controller/AboutController.php';
            $about = new AboutController();
            $about->index();
            break;

        default:
            http_response_code(404);
            echo '404 - Page Not Found.';
            break;
    }
}