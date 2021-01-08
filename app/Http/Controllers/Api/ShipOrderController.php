<?php

namespace App\Http\Controllers\Api;

use App\Services\ShipOrderService;
use App\Transformers\ShipOrderTransformer;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ShipOrderController
 * @package App\Http\Controllers\Api
 */
class ShipOrderController extends ApiController
{
    /**
     * @var ShipOrderService
     */
    private ShipOrderService $service;

    /**
     * ShipOrderController constructor.
     * @param ShipOrderTransformer $trasformer
     * @param ShipOrderService $personService
     */
    public function __construct(ShipOrderTransformer $trasformer, ShipOrderService $personService)
    {
        $this->transformer = $trasformer;
        $this->service = $personService;
    }

    /**
     * @OA\Get (
     *     summary="Returns a list of shiporders",
     *     tags={"Shiporder"},
     *     path="api/shiporder",
     *     @OA\Response(response="200", description="A list with shiporders")
     * )
     */
    public function index() {
        return $this->respondWithTransformer($this->service->listAll());
    }

    /**
     * @OA\Get (
     *     summary="Returns shiporder by id",
     *     path="api/shiporder/{id}",
     *     tags={"Shiporder"},
     *     @OA\Response(response="200", description="Returns shiporder by id")
     * )
     */
    public function show(int $id) {
        $person = $this->service->findById($id);

        if (!$person) {
            return response()->json([], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->respondWithTransformer($person);
    }
}
