<?php

namespace App\Application\UseCases;

use App\Domain\Repositories\TaskRepositoryInterface;


/**
 * Class CompleteTask
 * @package App\Application\UseCases
 * Ce cas d'utilisation est responsable de marquer une tâche comme complétée.
 * Il récupère la tâche via le dépôt, effectue la mise à jour de son état
 * et enregistre les modifications.
 */
class CompleteTask
{
    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Exécute le processus de complétion d'une tâche.
     *
     * @param string $taskId L'identifiant unique de la tâche à compléter.
     * 
     * @throws \DomainException Si la tâche n'est pas trouvée.
     *
     * Cette méthode suit les étapes suivantes :
     * 1. Récupérer la tâche via le dépôt.
     * 2. Vérifier si la tâche existe, sinon lever une exception.
     * 3. Marquer la tâche comme complétée.
     * 4. Sauvegarder la tâche mise à jour dans le dépôt.
     */
    public function execute(string $taskId): void
    {
        $task = $this->taskRepository->findById($taskId);

        if (!$task) {
            throw new \DomainException("Task not found.");
        }

        $task->complete();
        $this->taskRepository->update($task);
    }
}