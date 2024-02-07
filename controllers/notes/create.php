<?php 
use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    

    if (! validator::string($_POST['body'], 1, 500) ){
        $errors['body'] = 'Description must be between 1-500 characters';
    }

    if (empty($errors)) {
        
        $db->query('INSERT INTO notes(body, user_id) VALUEs(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }   

}


view('notes/create.view.php', [
    'heading' => 'Create Note',
    'errors' => $errors
]);

