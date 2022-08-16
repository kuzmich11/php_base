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
    <h1><?= $pageHeader ?></h1>
    <?php include "menu.php" ?>
    <?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?></p>
    <a href="?controller=security&action=logout">[Выход]</a>
    <?php endif ?>
<form action="/?controller=tasks&action=add" method="post" >
    <input type="text" id="description" name="task" class="form-control" placeholder="Новая задача" required="">
    <button class="w-25 btn btn-lg btn-primary mt-1" type="submit">Добавить задачу</button>
</form>
</div>
<h3>Список активных задач</h3>
<?php foreach ($_SESSION['tasks'] as $key => $task): ?>
    <div>
        <?=$task->getDescription()?>
        <a href="/?controller=tasks&action=done&key=<?=$key?>">[Выполнено]</a><br><br>
    </div>
<?php endforeach; ?>
</body>