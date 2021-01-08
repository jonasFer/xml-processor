<?php

namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface BaseRepositoryInterface
 */
interface BaseRepositoryInterface
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
