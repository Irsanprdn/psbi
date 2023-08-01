<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'compro'])->name('compro');


Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'procLogin'])->name('proc.login');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/', [AdminPanelController::class, 'home'])->name('home');
        Route::get('/about_us', [AdminPanelController::class, 'about_us'])->name('about_us');
        Route::get('/activity', [AdminPanelController::class, 'activity'])->name('activity');
        Route::get('/contact', [AdminPanelController::class, 'contact'])->name('contact');
        Route::get('/data_wbs', [AdminPanelController::class, 'data_wbs'])->name('data_wbs');
    });
});
