<?php


use Core\App;
use Core\Validator;

$db = App::resolve('Core\Database');

$currentUser = 1;

$errors = [];

if (!Validator::string($_POST['title'], max: 300))
    $errors['title'] = 'The title field should be from 1 to 300 characters';
if (!Validator::string($_POST['note_text']))
    $errors['note_text'] = 'The text field should be from 1 to 1500 characters';

if (empty($errors)) {
    $db->query('UPDATE notes SET title = :title, note_text = :note_text WHERE id=:id; ', [
        'id' => $_POST['note_id'],
        'title' => $_POST['title'],
        'note_text' => $_POST['note_text'],
    ]);
    header('Location: http://notes.nl/notes');
    die();
}

$note = $db->query('SELECT * FROM notes where id = :id', ['id' => $_GET['id']])->getOrFail();

view('notes/show.view.php', [
    'errors' => $errors,
    'note' => $note,
]);