<?php 

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Notes';

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();

dd($db);

require "views/note.view.php"; 