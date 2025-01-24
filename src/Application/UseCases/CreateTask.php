<?php

namespace App\Application\UseCases;

use App\Domain\Entities\Task;
use App\Domain\Repositories\TaskRepositoryInterface;

class CreateTask
{
    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function execute(string $title, string $description): Task
    {
        dump($title, $description);
        $task = new Task(uniqid(), $title, $description);
        $this->taskRepository->save($task);

        return $task;
    }
}