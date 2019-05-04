<?php

class Post {
    public $title;

    public $published;

    public $author;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first post', 'Aaron', true),
    new Post('My second post', 'Aaron', false),
    new Post('My third post', 'Aaron', true),
    new Post('My fourth post', 'Aaron', true),
];



$unpulishedPosts = array_filter($posts, function ($post) {
    return !$post->published;
});

$modified = array_map(function ($post) {
    return ['title' => $post->title];
}, $posts);

$titles = array_column($posts, 'title');

$authors = array_column($posts, 'author');

var_dump($modified);

var_dump($titles);

var_dump($authors);

var_dump($posts);
