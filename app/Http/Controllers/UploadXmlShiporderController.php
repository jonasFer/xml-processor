<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\CreateShiporder;
use App\Models\Xml\XmlShiporder;

/**
 * Class UploadXmlShiporderController
 * @package App\Http\Controllers
 */
class UploadXmlShiporderController extends Controller
{
    /**
     * @param CreateShiporder $createShiporder
     */
    public function create(CreateShiporder $createShiporder)
    {
        XmlShiporder::create([
            'xml' => simplexml_load_file($createShiporder->file('xml_shiporder'))->asXML()
        ]);

        return redirect('/')->with('success', 'Xml submited!');
    }
}
