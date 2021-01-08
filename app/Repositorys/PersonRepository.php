<?php

namespace App\Repositorys;

use App\Domain\Repository\PersonRepositoryInterface;
use App\Models\Person;

/**
 * Class PersonRepository
 * @package App\Http\Repositorys
 */
class PersonRepository extends BaseRepository implements PersonRepositoryInterface
{
    /**
     * PersonRepository constructor.
     */
    public function __construct()
    {
        $this->object = Person::class;
    }
}
