<?php

namespace App\Tests\Application\UseCases;

use App\Application\UseCases\CreateTask;
use App\Domain\Entities\Task;
use App\Infrastructure\Repositories\InMemoryTaskRepository;
use PHPUnit\Framework\TestCase;

class CreateTaskTest extends TestCase
{
    public function testCreateTask(): void
    {
        $taskRepository = new InMemoryTaskRepository();
        $createTask = new CreateTask($taskRepository);

        $task = $createTask->execute('Test Task', 'This is a test task');

        $this->assertInstanceOf(Task::class, $task);
        $this->assertEquals('Test Task', $task->getTitle());
        $this->assertEquals('This is a test task', $task->getDescription());
        $this->assertEquals('PENDING', $task->getStatus()->getValue());
    }
}