<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
            crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
    <h1><?=$pageHeader?></h1>
        <?php include "menu.php" ?>
    <?php if ($username !== null) : ?>
        <p>Рады вас приветствовать, <?= $username ?></p>
        <a href="?controller=security&action=logout">[Выход]</a>
    <?php else : ?>
        <a href="/?controller=security">[Войти]</a>
    <?php endif ?><br>
</div>
</body>
