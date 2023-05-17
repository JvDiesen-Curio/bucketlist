<?php

use App\Http\Controllers\BucketlistApiController;
use App\Http\Controllers\BucketlistController;
use App\Http\Controllers\BucketlistItemsController;
use App\Http\Controllers\mars;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BucketlistController::class, 'index']);
Route::get('/bucketlist/{Bucketlist}', [BucketlistController::class, 'show']);
Route::put('/bucketlist/{Bucketlist}', [BucketlistController::class, 'update']);



Route::post('/bucketlist', [BucketlistController::class, 'store']);
Route::get('/bucketlist/delete/{Bucketlist}', [BucketlistController::class, 'delete']);

Route::post('/bucketlistItem/{Bucketlist}', [BucketlistItemsController::class, 'store']);
Route::get('/bucketlistItem/done/{Bucketlist_items}', [BucketlistItemsController::class, 'done']);
Route::get('/bucketlistItem/delete/{Bucketlist_items}', [BucketlistItemsController::class, 'delete']);


Route::get('/mars', [mars::class, 'index']);
