<?php

use Core\App;


$db = App::getContainer()->resolve('Core\Database');

$current_user = $db->query('SELECT * FROM Users where email = :email', ['email' => $_SESSION['logged_user']['email']])->get();

$note = $db->query('select * from Note where id = :id', ['id' => $_POST['note_id']])->getOrFail();

authorize($note['user_id'] === $current_user['id']);

$db->query('delete from Note where id = :id', ['id' => $_POST['note_id']]);

header('location: http://notes.nl/notes');
die();