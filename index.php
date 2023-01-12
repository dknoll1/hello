<?php

// this is my controller for the hello project

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// create an instance of the Base class
$f3 = Base::instance();
// Java equivalent -> Base f3 = new Base();

// define a default route ("home page for hello project")
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
//    echo '<h1>Hello, Fat Free!</h1>';
//    include 'test.php';
});


// Run Fat-Free
$f3->run();
// Java -> f3.run(); -> is object operator