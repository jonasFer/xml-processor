<?php

namespace App\Transformers;

/**
 * Class ShipOrderTransformer
 * @package App\Transformers
 */
class ShipOrderTransformer extends Transformer
{
    /**
     * @var PersonTrasformer
     */
    private PersonTrasformer $personTransformer;

    /**
     * @var ShipToTransformer
     */
    private ShipToTransformer $shipToTransformer;

    /**
     * @var ItemTrasformer
     */
    private ItemTrasformer $itemTransformer;

    /**
     * ShipOrderTransformer constructor.
     * @param PersonTrasformer $personTransformer
     * @param ShipToTransformer $shipToTransformer
     * @param ItemTrasformer $itemTransformer
     */
    public function __construct(
        PersonTrasformer $personTransformer,
        ShipToTransformer $shipToTransformer,
        ItemTrasformer $itemTransformer
    ) {
        $this->personTransformer = $personTransformer;
        $this->shipToTransformer = $shipToTransformer;
        $this->itemTransformer = $itemTransformer;
    }

    /**
     * @param $data
     * @return array
     */
    public function transform($data): array
    {
        return [
            'id' => $data['id'],
            'person' => $this->personTransformer->transform($data->person),
            'ship_to' => $this->shipToTransformer->transform($data->shipTo),
            'items' => $this->itemTransformer->transform($data->items)
        ];
    }
}
