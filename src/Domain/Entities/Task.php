<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\TaskStatus;

class Task
{
    private string $id;
    private string $title;
    private string $description;
    private TaskStatus $status;

    public function __construct(string $id, string $title, string $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->status = TaskStatus::PENDING();
    }

    public function complete(): void
    {
        $this->status = TaskStatus::COMPLETED();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStatus(): TaskStatus
    {
        return $this->status;
    }
}