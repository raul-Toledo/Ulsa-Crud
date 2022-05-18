<?php

use App\Http\Controllers\ControladorEjemp;
use App\Http\Controllers\ComicController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/h',function (){
    return view('hola');
});
Route::get('plantilla', function (){
   return view('plantilla');
});
//Valores como un arreglo php > 5.4
//Con ->name('Nombre') agregamos un nombre a la ruta
Route::get('/rutas', [ControladorEjemp::class, 'ejemplo'])->name('rutaArreglo');

//Valores con With
Route::get('/rutasWith', function (){
    return view ('ejemplos.ejemploRutasWith')
        ->with('edad', 34)
        ->with('nombre', 'Raul')
        ->with('imc', 30.01);
})->name('rutaWith');

//Valores por URL
Route::get('/rutasUrl/{edad}/{nombre}/{imc}', [ControladorEjemp::class,'ejemploURL']);

//Mostrar Formulario
Route::get('/imc', [ControladorEjemp::class,'formulario']);

//Validar Formulario
Route::post('/validaImc', [ControladorEjemp::class,'imc'])->name('validaImc');

//Valores por defecto en la ruta
Route::get('/rutasUrlValor/{edad?}/{nombre?}/{imc?}', function ($edad = 48, $nombre = 'Batman', $imc=15 ){
    return view ('ejemplos.ejemploRutasWith')
        ->with('edad', $edad)
        ->with('nombre', $nombre)
        ->with('imc', $imc);
});
//Condiciones en la ruta
Route::get('/rutasWhere/{edad?}/{nombre?}/{imc?}', function ($edad = 48, $nombre = 'Batman', $imc=15 ){
    return view ('ejemplos.ejemploRutasWith')
        ->with('edad', 34)
        ->with('nombre', 'Raul')
        ->with('imc', 30.01);
})->where([
    'edad' => '[0-9]+',
    'nombre' => '[a-zA-ZñÑ]+',
    'imc' => '[0-9]+',
]);

//*****************************************************
Route::get('/comic',[ComicController::class,'index']);
Route::get('/comic/nuevo',[ComicController::class, 'create']);
Route::post('/comic/save',[ComicController::class, 'store']);
Route::get('/comic/show/{id}',[ComicController::class, 'show']);
Route::post('/comic/update',[ComicController::class, 'update']);
Route::get('/comic/del/{id}',[ComicController::class, 'destroy']);
//*****************************************************
