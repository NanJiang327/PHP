<?php

//$router->define([
//    'day1' => 'controllers/index.php',
//    'day1/about' => 'controllers/about.php',
//    'day1/about/culture' => 'controllers/about-culture.php',
//    'day1/contact' => 'controllers/contact.php',
//    'day1/names' => 'controllers/add-name.php' // only for POST type
//]);
//

$router->get('day1', 'PageController@home');
$router->get('day1/about', 'PageController@about');
$router->get('day1/about/culture', 'PageController@aboutCulture');
$router->get('day1/contact', 'PageController@contact');

$router->post('day1/addTodo', 'PageController@addTodo');

