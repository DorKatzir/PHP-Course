<?php
use Core\App;
use Core\Database;
use Core\Validator;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs
$errors = [];

if (!Validator::string($name, 3, 20)) {
    $errors['name'] = 'User Name must be min 3 - 20 max characters';
}

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
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
    // then someone whith that email already exists and hhas an account
    // If yes, redirect to a login page
    header('location: /');
    exit();
    
} else {
    // if not, save one to the database, and then log the user in, and redirect.
    $db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)', [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);

    // mark that the user has logged in.
    $_SESSION['user'] = [
        'name' => $name,
        'email' => $email
    ];

    header('location: /');
    exit();

}



