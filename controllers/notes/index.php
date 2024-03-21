<?php

use Core\App;

$db = App::resolve('Core\Database');

$userid = 1;

$notes =  $db->query("SELECT notes.*, Users.first_name, Users.last_name FROM notes JOIN Users ON notes.user_id = Users.id where user_id = :id;", ['id'=>$userid])->getAll();

view('notes/index.view.php',[
    'notes' => $notes
]);