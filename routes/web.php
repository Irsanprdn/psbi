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
        Route::get('/wbs_data', [AdminPanelController::class, 'wbs_data'])->name('wbs_data');

        Route::prefix('master_data')->group(function () {
            Route::get('/', [AdminPanelController::class, 'master_data'])->name('master_data');
            Route::post('/post', [AdminPanelController::class, 'master_data_post'])->name('master_data.post');
            Route::get('/edit/{groupId}/{basicId}', [AdminPanelController::class, 'master_data_edit'])->name('master_data.edit');
            Route::get('/delete/{groupId}/{basicId}', [AdminPanelController::class, 'master_data_delete'])->name('master_data.delete');
        });
    });
});
