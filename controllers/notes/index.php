<?php


$config = require 'config.php';
$db = new Database($config['database'], 'root', 'root');

$userid = 1;

$notes =  $db->query("SELECT notes.*, Users.first_name, Users.last_name FROM notes JOIN Users ON notes.user_id = Users.id where user_id = :id;", ['id'=>$userid])->getAll();

require 'views/notes/index.view.php';