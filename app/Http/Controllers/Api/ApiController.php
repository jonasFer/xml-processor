<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\Transformer;
use Illuminate\Database\Eloquent\Collection;

class ApiController extends Controller
{
    /**
     * @var null
     */
    protected $transformer = null;

    /**
     * @param $data
     * @param int $statusCode
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respond($data, $statusCode = 200, $headers = [])
    {
        return response()->json($data, $statusCode, $headers);
    }

    /**
     * Respond with data after applying transformer.
     *
     * @param $data
     * @param int $statusCode
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithTransformer($data, $statusCode = 200, $headers = [])
    {
        $this->checkTransformer();

        if ($data instanceof Collection) {
            $data = $this->transformer->collection($data);
        } else {
            $data = $this->transformer->item($data);
        }

        return $this->respond($data, $statusCode, $headers);
    }

    /**
     * @throws \Exception
     */
    private function checkTransformer()
    {
        if ($this->transformer === null || ! $this->transformer instanceof Transformer) {
            throw new \Exception('Invalid data transformer.');
        }
    }
}
