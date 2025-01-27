<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Task;


/**
 * Interface TaskRepositoryInterface
 *
 * Cette interface définit un contrat pour la gestion des tâches (Task).
 * Elle est utilisée pour l'abstraction de la persistance des données,
 * permettant de changer l'implémentation de stockage (base de données, mémoire, API, etc.)
 * sans impacter le reste de l'application.
 *
 * @package App\Domain\Repositories
 */
interface TaskRepositoryInterface
{
    public function findById(string $id): ?Task;
    public function save(Task $task): void;
    public function update(Task $task): void;
    public function delete(Task $task): void;
    public function findAll(): array;
}