<?php

namespace App\UserInterface\Controllers;

use App\Application\UseCases\CreateTask;
use App\Application\UseCases\CompleteTask;
use App\Domain\Repositories\TaskRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    private CreateTask $createTask;
    private CompleteTask $completeTask;
    private TaskRepositoryInterface $taskRepository;

    public function __construct(CreateTask $createTask, CompleteTask $completeTask, TaskRepositoryInterface $taskRepository)
    {
        $this->createTask = $createTask;
        $this->completeTask = $completeTask;
        $this->taskRepository = $taskRepository;
    }

    #[Route('/tasks', name: 'task_index', methods: ['GET'])]
    public function index()
    {
        $tasks = $this->taskRepository->findAll();
        return $this->render('task/index.html.twig', ['tasks' => $tasks]);
    }

    #[Route('/tasks', name: 'create_task', methods: ['POST'])]
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
}