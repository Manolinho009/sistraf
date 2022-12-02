<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProducaoController;
use App\Http\Controllers\RetaguardaController;
use App\Http\Controllers\WebController;
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


// RETORNA A FUNÇÃO INDEX DENTRO DO "MainController" QUANDO USADO O LINK '/'
Route::get('/', [MainController::class, 'index']);




// RETORNA A FUNÇÃO DETERMINADA DENTRO DO "#Controller" QUANDO USADO O LINK COM O PREFIXO INDICADO
Route::prefix('producao')->group(function () {
    Route::get('/', [ProducaoController::class, 'producao']);
    Route::get('/main', [ProducaoController::class, 'producao']);
});
Route::prefix('retaguarda')->group(function () {
    Route::get('/', [RetaguardaController::class, 'retaguarda']);
    Route::get('/main', [RetaguardaController::class, 'retaguarda']);
});
Route::prefix('web')->group(function () {
    Route::get('/', [WebController::class, 'web']);
    Route::get('/main', [WebController::class, 'web']);
});
Route::prefix('chat')->group(function () {
    Route::get('/', [ChatController::class, 'chat']);
    Route::get('/main', [ChatController::class, 'chat']);
});
