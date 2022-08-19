<?php

class Task {
    private string $description;
    private bool $isDone = false;

    /**
     * @param string $description
     */
    public function __construct(string $task)
    {
        $this->description = $task;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    function setIsDone(): self
    {
        $this->isDone = true;
        return $this;
    }

}
