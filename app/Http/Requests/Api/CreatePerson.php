<?php

namespace App\Http\Requests\Api;

/**
 * Class CreatePerson
 */
class CreatePerson extends ApiRequest
{
    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'xml_person' => 'required|mimes:xml'
        ];
    }
}
