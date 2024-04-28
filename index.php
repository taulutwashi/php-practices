<?php
require 'functions.php';
require 'Database.php';

//require 'router.php';


$database = new Database();

$posts = $database->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

