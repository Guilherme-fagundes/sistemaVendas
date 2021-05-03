<?php

use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\VendaController;
use App\Http\Controllers\Site\LoginController;
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

Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/loginPost', [LoginController::class, 'loginPost'])->name('login.post');

Route::prefix('admin')->group(function (){
    Route::get('/', [DashController::class, 'index'])->name('dash.index');
    Route::get('/logout', [DashController::class, 'logout'])->name('dash.logout');

    //Vendas
    Route::get('/vendas', [VendaController::class, 'index'])->name('dash.vendas');
    Route::post('/vendaPost', [VendaController::class, 'searchProd'])->name('venda.searchProd');
    Route::get('/venda/apagar/{id}', [VendaController::class, 'delete'])->name('pvenda.del');
    Route::post('/vendaFim', [VendaController::class, 'fimPost'])->name('venda.finaliza.post');

});
