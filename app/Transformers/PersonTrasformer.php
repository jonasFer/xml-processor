<?php

namespace App\Transformers;

/**
 * Class PersonTrasformer
 * @package App\Transformers
 */
class PersonTrasformer extends Transformer
{
    /**
     * @var PhoneTrasformer
     */
    private PhoneTrasformer $phoneTrasformer;

    /**
     * PersonTrasformer constructor.
     * @param PhoneTrasformer $phoneTrasformer
     */
    public function __construct(PhoneTrasformer $phoneTrasformer)
    {
        $this->phoneTrasformer = $phoneTrasformer;
    }

    /**
     * @param $data
     * @return array
     */
    public function transform($data): array
    {
        return [
            'id' => $data['id'],
            'name' => $data['name'],
            'phones' => $this->phoneTrasformer->transform($data->phones)
        ];
    }
}
