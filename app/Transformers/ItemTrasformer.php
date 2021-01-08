<?php

namespace App\Transformers;

/**
 * Class ItemTrasformer
 * @package App\Transformers
 */
class ItemTrasformer extends Transformer
{
    /**
     * @param array $data
     * @return array
     */
    public function transform($data): array
    {
        $items = [];
        if (is_countable($data)) {
            foreach ($data as $item) {
                $items[] =  [
                    'id' => $item['id'],
                    'title' => $item['title'],
                    'note' => $item['note'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price']
                ];
            }
        }

        return $items;
    }
}
