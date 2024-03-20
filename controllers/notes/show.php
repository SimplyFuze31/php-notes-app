<?php

use Core\Database;
use Core\Validator;

$currentUser = 1;

$errors = [];

$config = require base_path('config.php');
$db = new Database($config['database'], 'root', 'root');

$note = $db->query('SELECT * FROM notes where id = :id',['id' => $_GET['id']])->getOrFail();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


}

authorize($note['user_id'] === $currentUser);

view('notes/show.view.php', [
    'errors' => $errors,
    'note' => $note
]);