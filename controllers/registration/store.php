<?php
use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs
$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] ='Password must be at least 7 characters';
}

if (!empty($errors)) {
    return view('registration/create.view.php',[
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
// check if the account already exists
$result = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

dd($result);


    // if yes, redirect to login page
    // if not, save one to the database, and then log the user in, and redirect.


