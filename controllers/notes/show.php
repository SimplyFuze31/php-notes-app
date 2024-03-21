<?php

use Core\App;

$currentUser = 1;

$db = App::resolve('Core\Database');

$note = $db->query('SELECT * FROM Note where id = :id', ['id' => $_GET['id']])->getOrFail();

authorize($note['user_id'] === $currentUser);

view('notes/show.view.php', [
    'note' => $note
]);