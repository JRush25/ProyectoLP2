<?php
Use App\Models\Libro;
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

Route::get('libros', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Libro::all();
});

Route::get('libros/{id}', function($id) {
    return Libro::find($id);
});

Route::post('libros', function(Request $request) {
    return Libro::create($request->all);
});

Route::put('libros/{id}', function(Request $request, $id) {
    $libro = Libro::findOrFail($id);
    $libro->update($request->all());

    return $libro;
});

Route::delete('libros/{id}', function($id) {
    Libro::find($id)->delete();

    return 204;
});