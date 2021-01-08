<?php

namespace App\Observers;

use App\Jobs\ProcessorXMLShiporder;
use App\Models\Xml\XmlShiporder;

/**
 * Class ShipOrderObserver
 * @package App\Observers
 */
class ShipOrderObserver
{
    /**
     * Handle the XmlShiporder "created" event.
     *
     * @param  \App\Models\Xml\XmlShiporder  $xmlShiporder
     * @return void
     */
    public function created(XmlShiporder $xmlShiporder)
    {
        ProcessorXMLShiporder::dispatch($xmlShiporder);
    }
}
