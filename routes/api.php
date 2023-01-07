<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\CompanyController;
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

//get all sliders
Route::get('slidersAPI', [CompanyController::class, 'slidesAPI']);
Route::get('products', [ProjectController::class, 'productsAPI']);
Route::get('productdetails/{id}', [ProjectController::class, 'productDetails']);
Route::POST('quatation', [QuotationController::class, 'quotationAPI']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});