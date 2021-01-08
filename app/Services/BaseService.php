<?php

namespace App\Services;

use App\Domain\Repository\BaseRepositoryInterface;
use App\Domain\Services\BaseServiceInterface;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class BaseService
 */
class BaseService implements BaseServiceInterface
{
    /**
     * @var BaseRepositoryInterface
     */
    private BaseRepositoryInterface $repository;

    /**
     * BaseService constructor.
     * @param BaseRepositoryInterface $baseRepository
     */
    public function __construct(BaseRepositoryInterface $baseRepository)
    {
        $this->repository = $baseRepository;
    }

    /**
     * @return array
     */
    public function listAll(): Collection
    {
        return $this->repository->listAll();
    }

    /**
     * @param int $id
     * @return object|null
     */
    public function findById(int $id): ?object
    {
        return $this->repository->findById($id);
    }
}
