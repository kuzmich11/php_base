<?php

$pdo = require 'db.php';
require_once 'model/UserProvider.php';
require_once 'model/User.php';

$pdo->exec('CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(150),
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    description VARCHAR(200) NOT NULL,
    isDone TINYINT NOT NULL
)');

$user = new User ('admin');
$user->setName('Vovan');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');

$user2 = new User ('user');
$userProvider->registerUser($user2, '1234');