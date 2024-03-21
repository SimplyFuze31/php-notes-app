<?php

use Core\App;
use Core\Validator;

$currentUser = 1;

$db = App::resolve('Core\Database');

$errors = [];

if (!Validator::string($_POST['title'], max: 300))
    $errors['title'] = 'The title field should be from 1 to 300 characters';

if (!Validator::string($_POST['note_text']))
    $errors['note_text'] = 'The text field should be from 1 to 1500 characters';

if (empty($errors)) {
    $db->query("INSERT INTO notes (title, note_text, create_date, user_id) VALUES (:title, :note_text, :create_date,:user_id)", [
        'title' => $_POST['title'],
        'note_text' => $_POST['note_text'],
        'create_date' => date('Y-m-d'),
        'user_id' => $currentUser]);
    header('location: http://notes.nl/notes');
    die();
}


view('notes/create.view.php', [
    'errors' => $errors,
]);