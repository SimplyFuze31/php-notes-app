<?php

use Core\App;

if (!$_SESSION){
    redirect('/register');
}



$db = App::resolve('Core\Database');

$user = $db->query('SELECT * FROM Users where email = :email', ['email' => $_SESSION['logged_user']['email']])->get();

$notes =  $db->query("SELECT Note.*, Users.name FROM Note JOIN Users ON Note.user_id = Users.id where user_id = :id;", ['id'=>$user['id']])->getAll();

view('notes/index.view.php',[
    'notes' => $notes
]);