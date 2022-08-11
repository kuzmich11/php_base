<?php

require_once 'model/UserProvider.php';
require_once 'model/User.php';

$error = null;

if (isset($_POST['username'], $_POST['pass'])) {
    ['username' => $username, 'pass' => $pass] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $pass);

    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    }
//    var_dump($user);
//    die;
}

require_once 'view/signin.php';