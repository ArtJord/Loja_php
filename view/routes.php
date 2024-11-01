<?php

// Array para armazenar as rotas
$routes = [
    '/' => 'index.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
];


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if (array_key_exists($uri, $routes)) {
    require_once $routes[$uri];
} else {
    
    echo 'Página não encontrada';
}