<?php 

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $errors = [];

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

require 'views/note.create.view.php';


