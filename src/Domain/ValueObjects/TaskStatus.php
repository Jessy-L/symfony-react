<?php

namespace App\Domain\ValueObjects;


/**
 * Class TaskStatus
 *
 * Cette classe représente le statut d'une tâche sous forme d'un "Value Object".
 * Elle garantit que seules les valeurs valides ('PENDING', 'COMPLETED') peuvent être utilisées,
 * assurant ainsi l'intégrité des données dans le domaine métier.
 *
 * @package App\Domain\ValueObjects
 */
class TaskStatus
{
    private const STATUS = ['PENDING', 'COMPLETED'];
    private string $status;

    private function __construct(string $status)
    {
        if (!in_array($status, self::STATUS)) {
            throw new \InvalidArgumentException("Invalid status: $status");
        }
        $this->status = $status;
    }

    public static function PENDING(): self
    {
        return new self('PENDING');
    }

    public static function COMPLETED(): self
    {
        return new self('COMPLETED');
    }

    public function getValue(): string
    {
        return $this->status;
    }
}