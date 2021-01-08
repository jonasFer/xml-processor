<?php

namespace App\Services;

use App\Domain\Repository\ShipOrderRepositoryInterface;
use App\Domain\Services\ShipOrderServiceInterface;

/**
 * Class ShipOrderService
 * @package App\Services
 */
class ShipOrderService extends BaseService implements ShipOrderServiceInterface
{
    /**
     * ShipOrderService constructor.
     * @param ShipOrderRepositoryInterface $shipOrderRepository
     */
    public function __construct(ShipOrderRepositoryInterface $shipOrderRepository)
    {
        parent::__construct($shipOrderRepository);
    }
}
