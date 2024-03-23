<?php

use Core\Validator;
use Core\Database;
use Core\App;

//Validate name
if (!Validator::string($_POST['password'],min: 3,max: 255)){
    $errors['name'] = 'Name must contain at least 3 characters';
}
//Validate email address
$errors = [];
if (!Validator::email($_POST['email'])) {
    $errors['email'] = 'Enter the correct email address';
}
//Validate password
if (!Validator::string($_POST['password'],min: 8,max: 255)){
    $errors['password'] = 'Password must contain at least 8 characters';
}


//Check if the email exist
$db = App::resolve(Database::class);

if($db->query("SELECT * FROM Users WHERE email = :email",[
    'email' => $_POST['email'],
])->get()){
    $errors['email'] = 'The account with this email already exists';
}
//Check for errors
//if there are errors, then redirect back to form`
if ($errors) {
    view('registration/create.view.php', [
        'errors' => $errors
    ]);
    die();
}
//if there are no errors, then add new user

$db->query("INSERT INTO Users  (name, email, password) VALUES (:name, :email, :password)",[
    'email'=> $_POST['email'],
    'password' => $_POST['password'],
    'name'=>$_POST['name']
]);

$_SESSION['logged_user'] = [
    'name'=>$_POST['name'],
    'email'=> $_POST['email'],
    'password' => $_POST['password'],
];
header('location: /notes');