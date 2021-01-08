<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadXmlPeopleController;
use App\Http\Controllers\UploadXmlShiporderController;
Route::get('/', function () {
    return view('upload');
});

Route::post('/upload-xml-people', [UploadXmlPeopleController::class, 'create']);
Route::post('/upload-xml-shiporder', [UploadXmlShiporderController::class, 'create']);
