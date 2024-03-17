<?php

$config = require 'config.php';
$db = new Database($config['database'], 'root', 'root');


$note = $db->query('SELECT * FROM notes where id = :id',['id' => $_GET['id']])->fetch();

if (!$note){
    abort();
}

$currentUser = 1;

if ($note['user_id'] != $currentUser)
{
    abort(Response::FORBIDDEN);
}
$heading = 'Save';
require 'views/notes/note.view.php';