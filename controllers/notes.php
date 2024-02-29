<?php

require 'Core/Database.php';
$config = require 'config.php';
$db = new Database($config['database'], 'root', 'root');

$notes = $db->query('SELECT * FROM notes')->fetchAll();


require 'views/notes/index.view.php';