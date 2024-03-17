<?php

$currentUser = 1;

$config = require 'config.php';
$db = new Database($config['database'], 'root', 'root');



$note = $db->query('SELECT * FROM notes where id = :id',['id' => $_GET['id']])->getOrFail();

authorize($note['user_id'] === $currentUser);
$heading = 'Save';
require 'views/notes/note.view.php';