<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'users';

$users = $db->query('select * from users')->fetchAll();

require "views/users.view.php";