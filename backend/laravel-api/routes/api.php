<?php
Use App\Models\Libro;
Use App\Models\Obra;
Use App\Models\Comentario;
Use App\Models\Foro;
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
//RUTAS LIBROS
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
//RUTAS OBRAS
Route::get('obras', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Obra::all();
});

Route::get('obras/{id}', function($id) {
    return Obra::find($id);
});

Route::post('obras', function(Request $request) {
    //return Obra::create($request->all);
    $data = $request->all();
        return Obra::create([
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion'],
            'nombre_archivo' => $data['nombre_archivo'],
        ]);
});

Route::put('obras/{id}', function(Request $request, $id) {
    $obra = Obra::findOrFail($id);
    $obra->update($request->all());

    return $obra;
});

Route::delete('obras/{id}', function($id) {
    Obra::find($id)->delete();
    return 204;
});

//RUTAS COMENTARIOS
Route::get('comentarios', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Comentario::all();
});

Route::get('comentarios/{id}', function($id) {
    return Comentario::find($id);
});

Route::post('comentarios', function(Request $request) {
    return Comentario::create($request->all);
});

Route::put('comentarios/{id}', function(Request $request, $id) {
    $comentario = Comentario::findOrFail($id);
    $comentario->update($request->all());

    return $comentario;
});

Route::delete('comentarios/{id}', function($id) {
    Comentario::find($id)->delete();

    return 204;
});

//RUTAS FORO
Route::get('foro', function() {
    return Foro::all();
    
});
Route::get('foro/{id}', function($id) {
    return Foro::find($id);
});

Route::post('foro', function(Request $request) {
    return Foro::create($request->all);
});

Route::put('foro/{id}', function(Request $request, $id) {
    $libro = Foro::findOrFail($id);
    $libro->update($request->all());

    return $libro;
});

Route::delete('foro/{id}', function($id) {
    Foro::find($id)->delete();

    return 204;
});