<?php
require 'functions.php';
require 'Database.php';


//require 'router.php';

$config = require 'config.php';

$database = new Database($config['database']);

$posts = $database->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

