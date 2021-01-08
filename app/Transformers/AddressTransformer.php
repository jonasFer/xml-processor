<?php

namespace App\Transformers;

/**
 * Class AddressTransformer
 * @package App\Transformers
 */
class AddressTransformer extends Transformer
{
    /**
     * @param $data
     * @return array
     */
    public function transform($data): array
    {
        return [
            'address' => $data['address'],
            'city' => $data['city'],
            'country' => $data['country']
        ];
    }
}
