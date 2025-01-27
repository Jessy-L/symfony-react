<?php

namespace App\Infrastructure\Persistence\Doctrine\Repositories;

use App\Domain\Entities\Task;
use App\Domain\Repositories\TaskRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Infrastructure\Persistence\Doctrine\Entities\Task as DoctrineTask;

class TaskRepository implements TaskRepositoryInterface
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    public function save(Task $domainTask): void
    {
        // Convertir l'entité de domaine en entité Doctrine
        $doctrineTask = new DoctrineTask();
        $doctrineTask->setTitle($domainTask->getTitle());
        $doctrineTask->setDescription($domainTask->getDescription());
        $doctrineTask->setStatus($domainTask->getStatus()->getValue());

        $this->entityManager->persist($doctrineTask);
        $this->entityManager->flush();
    }

    public function update(Task $domainTask): void
    {
        $doctrineTask = $this->entityManager->find(DoctrineTask::class, $domainTask->getId());
        $doctrineTask->setTitle($domainTask->getTitle());
        $doctrineTask->setDescription($domainTask->getDescription());
        $doctrineTask->setStatus($domainTask->getStatus()->getValue());

        $this->entityManager->flush();
    }
    
    public function delete(Task $domainTask): void
    {
        $doctrineTask = $this->entityManager->find(DoctrineTask::class, $domainTask->getId());
        $this->entityManager->remove($doctrineTask);
        $this->entityManager->flush();
    }

    public function findById(string $id): ?Task
    {
        $doctrineTask = $this->entityManager->find(DoctrineTask::class, $id);
        
        if (!$doctrineTask) {
            return null;
        }

        return $this->mapToDomainTask($doctrineTask);
    }

    public function findAll(): array
    {
        return $this->entityManager->getRepository(DoctrineTask::class)->findAll();
    }

    /**
     * Convertir une entité Doctrine en entité de domaine
     */
    private function mapToDomainTask(DoctrineTask $doctrineTask): Task
    {
        return new Task(
            $doctrineTask->getId(),
            $doctrineTask->getTitle(),
            $doctrineTask->getDescription(),
            $doctrineTask->getStatus()
        );
    }


}