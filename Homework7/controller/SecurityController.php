<?php
require_once 'model/UserProvider.php';
require_once 'model/User.php';
$pdo = require 'db.php';
session_start();

$error = null;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
}

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['username'] = $user;
    }
}

if (isset($_SESSION['username'])) {
    header('Location: /');
}

require_once 'view/signin.php';