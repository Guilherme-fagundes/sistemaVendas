<?php

use App\Http\Controllers\Admin\DashController;
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
});
