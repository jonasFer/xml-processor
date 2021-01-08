<?php

namespace App\Repositorys;

use App\Domain\Repository\PersonRepositoryInterface;
use App\Domain\Repository\ShipOrderRepositoryInterface;
use App\Models\Shiporder;

/**
 * Class ShipOrderRepository
 * @package App\Repositorys
 */
class ShipOrderRepository extends BaseRepository implements ShipOrderRepositoryInterface
{
    /**
     * PersonRepository constructor.
     */
    public function __construct()
    {
        $this->object = Shiporder::class;
    }
}
