<?php 
$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    ddr($_POST['body']);
}

require 'views/note.create.view.php';


