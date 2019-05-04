<?php

namespace App\Controllers;

use App\Core\App;

class PageController {
    public function home() {
        $tasks = App::get('database')->selectAll('todos');

        return view('task', ['tasks' => $tasks ]);

    }

    public function about() {
        return view('about');
    }

    public function aboutCulture() {
        return view('about-culture');
    }

    public function contact() {
        return view('contact');
    }

    public function addTodo() {
        App::get('database')->insertTodo('todos', $_POST['todo']);
    }

}