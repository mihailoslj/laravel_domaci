<?php

use App\Http\Controllers\ProductController;
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

//pozivam metodu index kase ProductController
//vraca sve proizvode
//Route::get('/products', [ProductController::class, 'index']); 

//unos podataka u bazu
//Route::post('/products', [ProductController::class, 'store']);

//vracanje proizvoda na osnovu id-a
//Route::get('/products', [ProductController::class,'show']);

//ova fora mi daje sve rauteve kao za prethodne 4 metode
Route::resource('products',ProductController::class);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
