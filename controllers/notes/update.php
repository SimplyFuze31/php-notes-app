<?php

use Core\App;
use Core\Database;
use Core\Validator;


$errors = [];

if (!Validator::string($_POST['title'], max: 300))
    $errors['title'] = 'The title field should be from 1 to 300 characters';
if (!Validator::string($_POST['note_text']))
    $errors['note_text'] = 'The text field should be from 1 to 1500 characters';
$db = App::resolve(Database::class);
if (empty($errors)) {
    $db->query('UPDATE Note SET title = :title, note_text = :note_text, modification_date = :modification_date  WHERE id=:id; ', [
        'id' => $_POST['note_id'],
        'title' => $_POST['title'],
        'note_text' => $_POST['note_text'],
        'modification_date' => date('Y-m-d')
    ]);
    redirect('/notes');
    die();
}

$note = $db->query('SELECT * FROM Note where id = :id', ['id' => $_GET['id']])->getOrFail();

view('notes/show.view.php', [
    'errors' => $errors,
    'note' => $note,
]);