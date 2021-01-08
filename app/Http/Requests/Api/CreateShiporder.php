<?php

namespace App\Http\Requests\Api;

/**
 * Class CreatePerson
 */
class CreateShiporder extends ApiRequest
{
    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'xml_shiporder' => 'required|mimes:xml'
        ];
    }
}
