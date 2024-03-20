<?php

use Core\Database;
use Core\Validator;

echo 'store';
$currentUser = 1;

$config = require base_path('config.php');
$db = new Database($config['database'], 'root', 'root');

$errors = [];

if (!Validator::string($_POST['title'], max: 300))
    $errors['title'] = 'The title field should be from 1 to 300 characters';

if (!Validator::string($_POST['note_text']))
    $errors['note_text'] = 'The text field should be from 1 to 1500 characters';

if (count($errors) === 0) {
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