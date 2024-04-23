<?php

// This is my controller

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// Instantiate the F3 Base Class
$f3 = Base::instance();

// define default route
$f3->route('GET /', function($f3){
    //echo '<h1>Hello Fat-Free!</h1>';

    // Add data to fat free hive
    $f3->set('name', 'Eugene');
    $f3->set('game', '2K');
    $f3->set('drink', 'Prime');
    $f3->set('food', 'Chicken');

    // Define a array
    $fruits = array('apple', 'banana', 'orange');
    $f3->set('fruitList', $fruits);


    // define an associative array
    $students = array('101' =>'Bob', '102'=>'Alak');
    $f3->set('studentList', $students);

    // Render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});
// Run Fat-Free
$f3->run();