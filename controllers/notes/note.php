<?php

$config = require 'config.php';
$db = new Database($config['database'], 'root', 'root');


$note = $db->query('SELECT * FROM notes where id = :id',['id' => $_GET['id']])->fetch();

require 'views/notes/note.view.php';