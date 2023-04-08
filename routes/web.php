<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\WisataPackageController;
use App\Http\Controllers\DashboardController as ControllersDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            // DashboardControoler@index =namacontroller@method
            ->name('dashboard');
        Route::resource('wisata-package', WisataPackageController::class);
        Route::resource('gallery', GalleryController::class);
    });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/detail/{slug}', [DetailController::class, 'index'])->name('detail');
Route::get('/paket-wisata', [ControllersDashboardController::class, 'index'])->name('paket-wisata');
Route::get('/paket-wisata/search', [ControllersDashboardController::class, 'search'])->name('paket-wisata.seacrh');
// Route::get('/paket-wisata/search', [ControllersDashboardController::class, 'search']);
