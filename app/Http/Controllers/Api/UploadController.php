<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    /**
     * @OA\Post(
     *     tags={"course"},
     *     summary="Returns a list of courses",
     *     description="Returns a object of courses",
     *     path="/api/upload",
     *     @OA\Response(response="200", description="A list with courses")
     * )
     */
    public function create()
    {

    }
}
