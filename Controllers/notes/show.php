<?php

use Core\App;
use Core\Database;

$db = App::resolve('Core\Database');

$currentUserId = $_SESSION['user']['id'];

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorize((int) $note['user_id'] === $currentUserId);

view("notes/show.view.php", ['heading' => 'Note','note' => $note]);