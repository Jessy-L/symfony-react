<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\Task;
use App\Domain\Repositories\TaskRepositoryInterface;

class InMemoryTaskRepository implements TaskRepositoryInterface
{
    private array $tasks = [];

    public function findById(string $id): ?Task
    {
        return $this->tasks[$id] ?? null;
    }

    public function save(Task $task): void
    {
        $this->tasks[$task->getId()] = $task;
    }

    public function findAll(): array
    {
        return array_values($this->tasks);
    }
}