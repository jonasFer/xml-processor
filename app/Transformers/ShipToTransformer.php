<?php

namespace App\Transformers;

/**
 * Class ShipToTransformer
 * @package App\Transformers
 */
class ShipToTransformer extends Transformer
{
    /**
     * @var AddressTransformer
     */
    private AddressTransformer $addressTransform;

    /**
     * ShipToTransformer constructor.
     * @param AddressTransformer $addressTransform
     */
    public function __construct(AddressTransformer $addressTransform)
    {
        $this->addressTransform = $addressTransform;
    }

    /**
     * @param $data
     * @return array
     */
    public function transform($data): array
    {
        return [
            'name' => $data['name'],
            'address' => $this->addressTransform->transform($data->address)
        ];
    }
}
