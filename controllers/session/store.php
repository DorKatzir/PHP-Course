<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs
$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}

if (!Validator::string($password)) {
    $errors['password'] ='Please provide a valid password';
}

if (!empty($errors)) {
    return view('session/create.view.php',[
        'errors' => $errors
    ]);
}


// match the credentials.
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();


if($user) {
    
    if (password_verify($password, $user['password'])) {
        
        $name = $user['name'];
    
        login([
            'name' => $name,
            'email' => $email
        ]);
    
        header('location: /');
        exit();
    } 
}


return view('session/create.view.php',[
        'errors' => [
            'password' => 'No matching account found for that email address and password.'
        ]
    ]);


