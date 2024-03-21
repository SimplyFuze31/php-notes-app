<?php

use Core\Database;

$currentUser = 1;

$config = require base_path('config.php');
$db = new Database($config['database'], 'root', 'root');

$note = $db->query('SELECT * FROM notes where id = :id',['id' => $_GET['id']])->getOrFail();

authorize($note['user_id'] === $currentUser);

view('notes/show.view.php', [
    'note' => $note
]);