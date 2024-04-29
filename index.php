<?php
require 'functions.php';
require 'Database.php';


//require 'router.php';

$config = require 'config.php';

$database = new Database($config['database']);

$id = $_GET['id'];

$query = 'SELECT * FROM posts where id = ?';

$posts = $database->query($query,[$id])->fetch();

dd($posts);

