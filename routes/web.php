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
    '/contato/{name?}/{category?}/{message?}', 
    function(
        string $name = 'UnKnown', 
        string $category = 'Uninformed Categoy', 
        string $message = 'Uninformed Message'){
    echo 'We are here: ' . $name . ' - ' . $category  . ' - ' . $message;
});
