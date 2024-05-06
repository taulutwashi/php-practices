<?php

$heading = 'Create Note';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd($_POST['body']);
}


require './views/note-create.view.php';