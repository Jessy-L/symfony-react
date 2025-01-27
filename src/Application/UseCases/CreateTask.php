<?php

namespace App\Application\UseCases;

use App\Domain\Entities\Task;
use App\Domain\Repositories\TaskRepositoryInterface;

/**
 * Class CreateTask
 *
 * Ce cas d'utilisation est responsable de la création d'une nouvelle tâche.
 * Il génère un identifiant unique, crée une tâche avec les informations fournies
 * et l'enregistre dans le dépôt.
 *
 * @package App\Application\UseCases
 */
class CreateTask
{
    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Exécute le processus de création d'une tâche.
     *
     * @param string $title Le titre de la tâche.
     * @param string $description La description détaillée de la tâche.
     * 
     * @return Task La tâche nouvellement créée.
     *
     * Cette méthode suit les étapes suivantes :
     * 1. Générer un identifiant unique pour la tâche.
     * 2. Créer une nouvelle instance de la tâche avec les données fournies.
     * 3. Sauvegarder la tâche dans le dépôt.
     * 4. Retourner la tâche créée.
     */
    public function execute(string $title, string $description): Task
    {
        $task = new Task(uniqid(), $title, $description);
        $this->taskRepository->save($task);

        return $task;
    }
}