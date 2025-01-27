<?php

namespace App\Application\UseCases;

use App\Domain\Repositories\TaskRepositoryInterface;

/**
 * Class DeleteTask
 *
 * Ce cas d'utilisation est responsable de la suppression d'une tâche existante.
 * Il vérifie si la tâche demandée existe, puis la supprime du dépôt.
 *
 * @package App\Application\UseCases
 */
class DeleteTask
{
    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Exécute le processus de suppression d'une tâche.
     *
     * @param string $taskId L'identifiant unique de la tâche à supprimer.
     * 
     * @throws \DomainException Si la tâche n'est pas trouvée.
     *
     * Cette méthode suit les étapes suivantes :
     * 1. Récupérer la tâche via son identifiant.
     * 2. Vérifier si la tâche existe, sinon lever une exception.
     * 3. Supprimer la tâche du dépôt.
     */
    public function execute(string $taskId): void
    {
        $task = $this->taskRepository->findById($taskId);

        if (!$task) {
            throw new \DomainException("Task not found.");
        }

        $this->taskRepository->delete($task);
    }
}