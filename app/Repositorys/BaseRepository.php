<?php

namespace App\Repositorys;

use App\Domain\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class BaseRepository
 * @package App\Http\Repositorys
 */
class BaseRepository implements BaseRepositoryInterface
{
    protected $object;

    /**
     * @return array
     */
    public function listAll(): Collection
    {
        return $this->object::all();
    }

    /**
     * @param int $id
     * @return object|null
     */
    public function findById(int $id): ?object
    {
        return $this->object::find($id);
    }
}
