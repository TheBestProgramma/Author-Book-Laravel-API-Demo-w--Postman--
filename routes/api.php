<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;


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

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('/user', function(Request $request){
        return $request->user();
    });

    // Route::get('/authors/{author}', [AuthorsController::class, 'show']);
    // Route::get('/authors', [AuthorsController::class, 'index']);

    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BooksController::class);
 
});

Route::get('/test', function(Request $request){
    return 'Authenticated';
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Book belongs to an Author
// User that creates books

//Create Author then Create Books

//Route for "author/{author}" for one specific author
