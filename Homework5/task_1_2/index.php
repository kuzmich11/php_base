<?php

include_once "task.php";
include "user.php";
include "comment.php";
include "taskService.php";

$user = new User("Владимир", "Студент");

$task = new Task("Новая задача", 0, $user);
var_dump($task);

$task->setDescription("Переопредиление задачи");
$task->markAsDone();
var_dump($task);

TaskService::addComment($user, $task, "Проверка коментария");
TaskService::addComment($user, $task, "Проверка коментария 2");
var_dump($task);
