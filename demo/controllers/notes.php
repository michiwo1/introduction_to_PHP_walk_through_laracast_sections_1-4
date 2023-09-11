<?php 

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Notes';

$note = $db->query('select * from notes where user_id = :1', ['id' => $_GET['id']])->fetch();

dd($db);

require "views/notes.view.php";