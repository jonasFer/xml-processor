<?php

namespace App\Observers;

use App\Jobs\ProcessorXMLPeople;
use App\Models\Xml\XmlPeople;

/**
 * Class PersonObserver
 * @package App\Observers
 */
class PersonObserver
{
    /**
     * @param XmlPeople $xmlPeople
     */
    public function created(XmlPeople $xmlPeople)
    {
        ProcessorXMLPeople::dispatch($xmlPeople);
    }
}
