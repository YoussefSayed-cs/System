<?php


require 'functions.php';
require 'Database.php';
require 'router.php';

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'] ?? 1;
$query = "select * from users where id = :id";

$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);