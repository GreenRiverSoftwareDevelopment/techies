<?php
    session_start();
    //referencing my autoloader and retrieving our router
    require_once 'vendor/autoload.php';
    $f3 = require_once 'vendor/bcosca/fatfree-core/base.php';
     
    //error handling
    $f3->set('DEBUG', 3);
     
    //define our routes
    //route for index
    $f3->route('GET /', function($f3) {
        $controller = new Controller($f3);
        $controller->home();    
    });
    
    //route for home
    $f3->route('GET /home', function($f3) {
        $controller = new Controller($f3);
        $controller->home();    
    });
    
    //route for dashboard
    $f3->route('GET|POST /dashboard', function($f3) {
        $controller = new Controller($f3);
        $controller->dashboard();    
    });
    
    //route for about
    $f3->route('GET /about', function($f3) {
        $controller = new Controller($f3);
        $controller->about();    
    });
    
    //route for the login page
    $f3->route('GET|POST /login', function($f3) {
        $controller = new Controller($f3);
        $controller->login();    
    });
    
    //route to logout
    $f3->route('GET /logout', function($f3) {
        $controller = new Controller($f3);
        $controller->logout();    
    });
    
    //route for the sign up page
    $f3->route('GET|POST /signup', function($f3) {
        $controller = new Controller($f3);
        $controller->signup();    
    });
    
    //route for profile page
    $f3->route('GET /meet/@id', function($f3, $params) {
        $controller = new Controller($f3);
        $controller->page($params['id']);
    });
    
    $f3->run();
?>