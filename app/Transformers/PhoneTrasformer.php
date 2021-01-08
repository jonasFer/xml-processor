<?php

namespace App\Transformers;

/**
 * Class PhoneTrasformer
 * @package App\Transformers
 */
class PhoneTrasformer extends Transformer
{
    /**
     * @param $data
     * @return array
     */
    public function transform($data): array
    {
        $phones = [];
        foreach ($data as $phone) {
            $phones[] = [
                'id' => $phone['id'],
                'number' => $phone['number']
            ];
        }

        return $phones;
    }
}
