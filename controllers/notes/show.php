<?php

use Core\Database;

$currentUser = 1;

$config = require base_path('config.php');
$db = new Database($config['database'], 'root', 'root');
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    header('Location: http://notes.nl/notes');
    die();
}


$note = $db->query('SELECT * FROM notes where id = :id',['id' => $_GET['id']])->getOrFail();

authorize($note['user_id'] === $currentUser);
$heading = 'Save';
require view('notes/show.view.php');