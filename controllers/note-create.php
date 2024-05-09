<?php
$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Create Note';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query('INSERT INTO php_practices.notes (body, user_id) VALUES (:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 2,
    ]);
}


require './views/note-create.view.php';