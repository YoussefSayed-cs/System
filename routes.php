<?php

$router->get('/', 'Controllers/index.php');
$router->get('/about', 'Controllers/about.php');
$router->get('/contact', 'Controllers/contact.php');

$router->get('/notes', 'Controllers/notes/index.php');
$router->get('/note', 'Controllers/notes/show.php');
$router->delete('/note', 'Controllers/notes/destroy.php');

$router->get('/notes/create', 'Controllers/notes/create.php');
$router->post('/notes', 'Controllers/notes/store.php');
