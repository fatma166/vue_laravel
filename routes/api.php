<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
//use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
// List all articles
Route::get('articles', [ArticleController::class,'index']);

/*// List a single article
Route::get('article/{id}', 'ArticleController@show');

// Create a new article
Route::post('article', 'ArticleController@store');

// Update a article
Route::put('article', 'ArticleController@store');

// Delete a article
Route::delete('article/{id}', 'ArticleController@destroy');*/