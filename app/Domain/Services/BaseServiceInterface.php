<?php

namespace App\Domain\Services;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface BaseServiceInterface
 */
interface BaseServiceInterface
{
    /**
     * @return Collection
     */
    public function listAll(): Collection;

    /**
     * @param int $id
     * @return object|null
     */
    public function findById(int $id): ?object;
}
