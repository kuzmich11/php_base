<?php

class TaskService {
    public static function addComment (User $author, Task $task, string $text)
    {
        $task->addComments(new Comment($author, $task, $text));
    }
}