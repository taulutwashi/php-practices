<?php

function dd($var): void{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

function urlIs($path): bool{
    return $_SERVER['REQUEST_URI'] == $path;;
}