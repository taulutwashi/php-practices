<?php
$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'My Notes';
$currentUserId = 2;


$note = $db->query('SELECT * FROM notes where id= :id', [
    'id' => $_GET['id']]
)->findOrFail();

authorize(intval($note['user_id']) === $currentUserId);


require "./views/note.view.php";