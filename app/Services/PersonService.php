<?php

namespace App\Services;

use App\Domain\Repository\PersonRepositoryInterface;
use App\Domain\Services\BaseServiceInterface;

/**
 * Class PersonService
 */
class PersonService extends BaseService implements BaseServiceInterface
{
    public function __construct(PersonRepositoryInterface $personRepository)
    {
        parent::__construct($personRepository);
    }
}
