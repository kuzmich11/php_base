<?php

class TaskProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    public function addTask(Task $task): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (description, isDone) VALUES (:description, :isDone)'
        );

        return $statement->execute([
            'description' => $task->getDescription(),
            'isDone' => $task->getIsDone()
        ]);
    }

    public function getUndoneList(): array
    {
        $statement = $this->pdo->query(
            'SELECT id, description FROM tasks'
        );
        return $statement->fetchAll();
    }

    public function deleteTask(int $key): void
    {
        $statement = $this->pdo->prepare(
            'DELETE FROM tasks WHERE id = :id'
        );
        $statement->execute([
            'id' => $key
        ]);
    }
}