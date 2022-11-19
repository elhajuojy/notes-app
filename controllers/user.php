<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'User';

$user = $db->query('select * from users where id = :id', ['id' => $_GET['id']])->fetch();

require "views/user.view.php";
