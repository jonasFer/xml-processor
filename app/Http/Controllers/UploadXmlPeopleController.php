<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\CreatePerson;
use App\Models\Xml\XmlPeople;

/**
 * Class UploadXmlPeopleController
 * @package App\Http\Controllers
 */
class UploadXmlPeopleController extends Controller
{
    public function create(CreatePerson $createPerson)
    {
        XmlPeople::create([
            'xml' => simplexml_load_file($createPerson->file('xml_person'))->asXML()
        ]);

        return redirect('/')
            ->with('success', 'Xml submited!');
    }
}
