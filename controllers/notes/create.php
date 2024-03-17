<?php

$currentUser = 1;
$config = require 'config.php';
$db = new Database($config['database'], 'root', 'root');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


    $db->query('INSERT INTO `notes` (`title`, `note_text`, `create_date`, `user_id`) VALUES (:title, :note_text, :create_date,:user_id)',[
        'title' => $_POST['title'],
        'note_text'=>$_POST['note_text'],
        'create_date'=>date('Y-m-d'),
        'user_id'=>$currentUser
    ]);

    header('Location: http://notes.nl/notes');
    die();
}


$heading = 'Create';
require 'views/notes/create.view.php';