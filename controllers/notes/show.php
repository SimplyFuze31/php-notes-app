<?php

use Core\App;
if (!$_SESSION){
    redirect('/register');
}



$db = App::resolve('Core\Database');

$user = $db->query('SELECT * FROM Users where email = :email', ['email' => $_SESSION['logged_user']['email']])->get();

$note = $db->query('SELECT * FROM Note where id = :id', ['id' => $_GET['id']])->getOrFail();

authorize($note['user_id'] === $user['id']);

view('notes/show.view.php', [
    'note' => $note
]);