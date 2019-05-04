<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database',new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


function view($name, $data = []) {
    // ['task' => 'Do something']

    extract($data); // $task = 'Do something'

    return require "app/views/{$name}.view.php";
}