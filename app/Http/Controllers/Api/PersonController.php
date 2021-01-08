<?php

namespace App\Http\Controllers\Api;

use App\Services\PersonService;
use App\Transformers\PersonTrasformer;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class PersonController
 * @package App\Http\Controllers\Api
 */
class PersonController extends ApiController
{
    private PersonService $service;
    /**
     * PersonController constructor.
     * @param PersonTrasformer $trasformer
     */
    public function __construct(PersonTrasformer $trasformer, PersonService $personService)
    {
        $this->transformer = $trasformer;
        $this->service = $personService;
    }

    /**
     * @OA\Get (
     *     summary="Returns a list of persons",
     *     tags={"Person"},
     *     path="api/person",
     *     @OA\Response(response="200", description="A list with persons")
     * )
     */
    public function index() {
        return $this->respondWithTransformer($this->service->listAll());
    }

    /**
     * @OA\Get (
     *     summary="Returns person by id",
     *     path="api/person/{id}",
     *     tags={"Person"},
     *     @OA\Response(response="200", description="A list with persons")
     * )
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id) {
        $person = $this->service->findById($id);

        if (!$person) {
            return response()->json([], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->respondWithTransformer($person);
    }
}
