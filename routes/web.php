<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobrenos',[\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato',[\App\Http\Controllers\ContatoController::class, 'contato']);

Route::get(
    '/contato/{name}/{category_id}', 
    function(
        string $name = 'UnKnown', 
        int $category_id = 1, 
        ){
    echo 'We are here: ' . $name . ' - ' . $category_id;
})->where('category_id', '[0-9]+')->where('name','[A-Za-z]+');
