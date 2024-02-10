<?php

use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if (! $form->validate($email, $password) ) {
    return view('session/create.view.php',[
        'errors' => $form->errors()
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

if(!$user){

}
return view('session/create.view.php',[
        'errors' => [
            'password' => 'No matching account found for that email address and password.'
        ]
    ]);


