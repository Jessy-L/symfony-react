<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\Task;
use App\Domain\Repositories\TaskRepositoryInterface;

/**
 * Class InMemoryTaskRepository
 * @package App\Infrastructure\Repositories
 * Cette classe est un dépôt de tâches qui stocke les données en mémoire 
 * (dans un tableau PHP). Elle est utilisée principalement pour les tests 
 * ou le développement rapide, sans nécessiter de base de données.
 */

class InMemoryTaskRepository implements TaskRepositoryInterface
{
    private array $tasks = [];

    /**
     * @param string $id
     * @return Task|null
     * Mdr je dois vraiment expliquer ça ?
     * On sait jamais : cette méthode permet de rechercher une tâche par son identifiant.
     */
    public function findById(string $id): ?Task
    {
        return $this->tasks[$id] ?? null;
    }

    /**
     * @return array
     * Mdr je dois vraiment expliquer ça ENCORE ?
     * Cette méthode permet de récupérer toutes les tâches du dépôt.
     */
    public function findAll(): array
    {
        return array_values($this->tasks);
    }

    /**
     * @param Task $task
     * @return void
     * Mdr je dois vraiment expliquer ça ENCORE ENCORE ?
     * Cette méthode permet de sauvegarder une tâche dans le dépôt.
     */
    public function save(Task $task): void
    {
        $this->tasks[$task->getId()] = $task;
    }

    /**
     * @param Task $task
     * @return void
     * Mdr je dois vraiment expliquer ça ENCORE ENCORE ENCORE ?
     * Cette méthode permet de supprimer une tâche du dépôt.
     */
    public function delete(Task $task): void
    {
        unset($this->tasks[$task->getId()]);
    }
    
    /**
     * @param Task $task
     * @return void
     * Mdr je dois vraiment expliquer ça ENCORE ENCORE ENCORE ENCORE ?
     * Cette méthode permet de mettre à jour une tâche dans le dépôt.
     */
    public function update(Task $task): void
    {
        $this->tasks[$task->getId()] = $task;
    }
}