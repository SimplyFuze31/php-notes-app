<?php

use Core\App;


$db = App::getContainer()->resolve('Core\Database');

$current_user = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $_POST['note_id']])->getOrFail();

authorize($note['user_id'] === $current_user);

$db->query('delete from notes where id = :id', ['id' => $_POST['note_id']]);

header('location: http://notes.nl/notes');
die();