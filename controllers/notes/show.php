<?php

use Core\Database;
use Core\Validator;

$currentUser = 1;

$errors = [];
$config = require base_path('config.php');
$db = new Database($config['database'], 'root', 'root');
$note = $db->query('SELECT * FROM notes where id = :id',['id' => $_GET['id']])->getOrFail();


if ($_SERVER['REQUEST_METHOD'] === 'POST'){


    if(!Validator::string($_POST['title'], max: 300))
        $errors['title'] = 'The title field should be from 1 to 300 characters';
    if (!Validator::string($_POST['note_text']))
        $errors['note_text'] = 'The text field should be from 1 to 1500 characters';

    if (count($errors) === 0 ){
        $db->query('update notes set title = :title, note_text = :note_text where id=:id; ',[
            'id' => $note['id'],
            'title' => $_POST['title'],
            'note_text'=>$_POST['note_text'],
        ]);
        header('Location: http://notes.nl/notes');
        die();
    }
}



authorize($note['user_id'] === $currentUser);
$heading = 'Save';
require view('notes/show.view.php');