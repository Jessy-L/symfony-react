<?php

namespace App\Application\UseCases;

use App\Domain\Repositories\TaskRepositoryInterface;

class CompleteTask
{
    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function execute(string $taskId): void
    {
        $task = $this->taskRepository->findById($taskId);

        if (!$task) {
            throw new \DomainException("Task not found.");
        }

        $task->complete();
        $this->taskRepository->save($task);
    }
}