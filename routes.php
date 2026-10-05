<?php

$router->get('/', 'Controllers/index.php');
$router->get('/about', 'Controllers/about.php');
$router->get('/contact', 'Controllers/contact.php');

$router->get('/notes', 'Controllers/notes/index.php')->only('auth');
$router->get('/note', 'Controllers/notes/show.php')->only('auth');
$router->delete('/note', 'Controllers/notes/destroy.php')->only('auth');

$router->get('/note/edit', 'Controllers/notes/edit.php')->only('auth');
$router->patch('/note', 'Controllers/notes/update.php')->only('auth');

$router->get('/notes/create', 'Controllers/notes/create.php')->only('auth');
$router->post('/notes', 'Controllers/notes/store.php')->only('auth');

$router->get('/register', 'Controllers/registration/create.php')->only('guest');
$router->post('/register', 'Controllers/registration/store.php')->only('guest');

$router->get('/login', 'Controllers/session/create.php')->only('guest');
$router->post('/session', 'Controllers/session/store.php')->only('guest');
$router->delete('/session', 'Controllers/session/destroy.php')->only('auth');