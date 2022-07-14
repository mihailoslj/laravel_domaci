<?php
use App\Models\Product;
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

Route::get('/products', function(){
    return Product::all(); //vraca sve proizvode
});

Route::post('/products', function(){ //unos u tabelu post pozivom
    return Product::create([
        'name' => 'Product one',
        'slug' => 'product-one',
        'description' => 'This is product one',
        'price' => '9.99'
    ]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
