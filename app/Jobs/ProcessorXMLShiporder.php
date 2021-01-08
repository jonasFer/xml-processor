<?php

namespace App\Jobs;

use App\Models\Address;
use App\Models\Item;
use App\Models\Person;
use App\Models\Phone;
use App\Models\Shiporder;
use App\Models\Shipto;
use App\Models\Xml\XmlShiporder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessorXMLShiporder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var XmlShiporder
     */
    private XmlShiporder $xmlShiporder;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(XmlShiporder $xmlShiporder)
    {
        $this->xmlShiporder = $xmlShiporder;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        $xml = simplexml_load_string($this->xmlShiporder->xml);

        foreach ($xml->shiporder as $shiporderXml) {
            $address = Address::create([
                'address' => $shiporderXml->shipto->address,
                'city' => $shiporderXml->shipto->city,
                'country' => $shiporderXml->shipto->country
            ]);

            $shipto = Shipto::create([
                'name' => $shiporderXml->shipto->name,
                'address_id' => $address->id
            ]);

            $shiporder = Shiporder::create([
                'person_id' => $shiporderXml->orderperson,
                'shipto_id' => $shipto->id
            ]);

            foreach ($shiporderXml->items->item as $item) {
                Item::create([
                    'title' => $item->title,
                    'note' => $item->note,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                    'shiporder_id' => $shiporder->id
                ]);
            }
        }
    }
}
