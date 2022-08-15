<?php
require_once 'model/UserProvider.php';
require_once 'model/User.php';
session_start();

$error = null;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
}

if (isset($_POST['username'], $_POST['pass'])) {
    ['username' => $username, 'pass' => $pass] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $pass);

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