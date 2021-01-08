<?php

namespace App\Jobs;

use App\Models\Person;
use App\Models\Phone;
use App\Models\Xml\XmlPeople;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * Class ProcessorXMLPeople
 * @package App\Jobs
 */
class ProcessorXMLPeople implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var XmlPeople
     */
    private XmlPeople $xmlPeople;

    /**
     * ProcessorXMLPeople constructor.
     * @param XmlPeople $xmlPeople
     */
    public function __construct(XmlPeople $xmlPeople)
    {
        $this->xmlPeople = $xmlPeople;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        $xml = simplexml_load_string($this->xmlPeople->xml);

        foreach ($xml->person as $personXml) {
            $person = Person::create([
                'name' => $personXml->personname
            ]);
            foreach ($personXml->phones->phone as $phone) {
                Phone::create([
                    'number' => $phone,
                    'person_id' => $person->id
                ]);
            }
        }
    }
}
