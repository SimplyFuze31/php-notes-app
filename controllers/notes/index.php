<?php

use Core\App;

$db = App::resolve('Core\Database');

$userid = 1;

$notes =  $db->query("SELECT Note.*, Users.first_name, Users.last_name FROM Note JOIN Users ON Note.user_id = Users.id where user_id = :id;", ['id'=>$userid])->getAll();

view('notes/index.view.php',[
    'notes' => $notes
]);