<?php
$heading = 'My Notes';

$config = require 'config.php';

$database = new Database($config['database']);




$query = 'SELECT * FROM notes';

$notes = $database->query($query)->fetchAll();

require "./views/notes.view.php";