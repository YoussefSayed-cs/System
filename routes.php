<?php

$router->get('/', 'Controllers/index.php');
$router->get('/about', 'Controllers/about.php');
$router->get('/contact', 'Controllers/contact.php');

$router->get('/notes', 'Controllers/notes/index.php')->only('auth');
$router->get('/note', 'Controllers/notes/show.php');
$router->delete('/note', 'Controllers/notes/destroy.php');

$router->get('/note/edit', 'Controllers/notes/edit.php');
$router->patch('/note', 'Controllers/notes/update.php');

$router->get('/notes/create', 'Controllers/notes/create.php');
$router->post('/notes', 'Controllers/notes/store.php');

$router->get('/register', 'Controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php')->only('guest');

$router->get('/login', 'controllers/session/create.php')->only('guest');
$router->post('/session', 'controllers/session/store.php')->only('guest');
$router->delete('/session', 'controllers/session/destroy.php')->only('auth');