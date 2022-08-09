<?php

class User {
    private string $userName;
    private ?string $position;

    /**
     * @param string $userName
     * @param string $position
     */
    public function __construct(string $userName, string $position)
    {
        $this->userName = $userName;
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

}