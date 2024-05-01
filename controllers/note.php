<?php
$heading = 'My Notes';

$config = require 'config.php';

$database = new Database($config['database']);



$query = 'SELECT * FROM notes where id=:id';

$note = $database->query($query,['id'=>$_GET['id']])->fetch();

require "./views/note.view.php";