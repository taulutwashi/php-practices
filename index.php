<?php
require 'functions.php';

//require 'router.php';

$dsn = "mysql:host=localhost;port=3306;dbname=php_practices;charset=UTF8";

$pdo = new PDO($dsn, 'root','washi');
$query = $pdo->prepare('SELECT * FROM posts');
$query->execute();

$posts = $query->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

