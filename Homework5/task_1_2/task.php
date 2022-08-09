<?php

class Task {
    private string $description;
    private $dateCreated;
    private $dateUpdated;
    private $dateDone;
    private ?int $priority;
    private bool $isDone = false;
    private User $user;
    private array $comments = [];

    /**
     * @param string $description
     * @param int|null $priority
     * @param User $user
     */
    public function __construct(string $description, ?int $priority, User $user)
    {
        $this->description = $description;
        $this->dateCreated = date("d.m.y  H.i.s");
        $this->priority = $priority;
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    public function addComments($comment): void
    {
        $this->comments[] = $comment;
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
    public function setDescription($description): void
    {
        $this->description = $description;
        $this->dateUpdated = date("d.m.y  H.i.s");
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @return mixed
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * @return mixed
     */
    public function getDateDone()
    {
        return $this->dateDone;
    }

    /**
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * @param int|null $priority
     */
    public function setPriority(?int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return bool
     */
    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    function markAsDone()
    {
        $this->isDone = true;
        $this->dateUpdated = date("d.m.y  H.i.s");
        $this->dateDone = date("d.m.y  H.i.s");
    }

}
