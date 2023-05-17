<?php

use App\Http\Controllers\BucketlistApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#create
Route::post('/bucketlist', [BucketlistApiController::class, 'post']);
#get list
Route::get('/bucketlist', [BucketlistApiController::class, 'list']);
#get item
Route::get('/bucketlist/{Bucketlist:id}', [BucketlistApiController::class, 'get']);

#update 
Route::put('/bucketlist/{Bucketlist:id}', [BucketlistApiController::class, 'update']);

#delete

Route::delete('/bucketlist/{Bucketlist:id}', [BucketlistApiController::class, 'delete']);
