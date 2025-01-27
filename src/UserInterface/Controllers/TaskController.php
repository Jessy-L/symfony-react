<?php

namespace App\UserInterface\Controllers;

use App\Application\UseCases\CreateTask;
use App\Application\UseCases\CompleteTask;
use App\Application\UseCases\DeleteTask;
use App\Domain\Repositories\TaskRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    private CreateTask $createTask;
    private CompleteTask $completeTask;
    private DeleteTask $deleteTask;
    private TaskRepositoryInterface $taskRepository;

    public function __construct(CreateTask $createTask, DeleteTask $deleteTask, CompleteTask $completeTask, TaskRepositoryInterface $taskRepository)
    {
        $this->createTask = $createTask;
        $this->deleteTask = $deleteTask;
        $this->completeTask = $completeTask;
        $this->taskRepository = $taskRepository;
    }

    #[Route('/', name: 'task_index', methods: ['GET'])]
    public function index()
    {
        return $this->render('task/index.html.twig');
    }

    #[Route('/tasks/create', name: 'create_task_form', methods: ['GET'])]
    public function showCreateForm()
    {
        return $this->render('task/create.html.twig');
    }

    #[Route('/tasks/create', name: 'create_task', methods: ['POST'])]
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $title = $request->request->get('title');
            $description = $request->request->get('description');
            $this->createTask->execute($title, $description);
            return $this->redirectToRoute('task_index');
        }

        return $this->render('task/create.html.twig');
    }

    #[Route('/tasks/{id}/complete', name: 'complete_task', methods: ['GET'])]
    public function complete(string $id)
    {
        $this->completeTask->execute($id);
        return $this->render('task/complete.html.twig');
    }

    #[Route('/tasks/{id}/delete', name: 'delete_task', methods: ['GET'])]
    public function delete(string $id)
    {
        $this->deleteTask->execute($id);
        return $this->render('task/delete.html.twig');
    }

    #[Route('/api/tasks', name: 'get_tasks', methods: ['GET'])]
    public function getTasks(): JsonResponse
    {
        $tasks = $this->taskRepository->findAll();
        return new JsonResponse(
            array_map(function($task) {
                return [
                    'id' => $task->getId(),
                    'title' => $task->getTitle(),
                    'description' => $task->getDescription(),
                    'status' => $task->getStatus()
                ];
            }, $tasks)
        );
    }
}