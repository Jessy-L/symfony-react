<?php

namespace App\Domain\ValueObjects;

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