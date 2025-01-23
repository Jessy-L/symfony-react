<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Task;

interface TaskRepositoryInterface
{
    public function findById(string $id): ?Task;
    public function save(Task $task): void;
    public function findAll(): array;
}