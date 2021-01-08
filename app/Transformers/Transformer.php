<?php

namespace App\Transformers;

use Illuminate\Support\Collection;
/**
 * Class Transforme
 * @package App\Transformers
 */
abstract class Transformer
{
    /**
     * @param Collection $data
     * @return array
     */
    public function collection(Collection $data): array
    {
        return $data->map([$this, 'transform'])->toArray();
    }

    /**
     * @param $data
     * @return array
     */
    public function item($data): array
    {
        return [
            $this->transform($data)
        ];
    }


    /**
     * @param $data
     * @return array
     */
    public abstract function transform($data): array;
}
