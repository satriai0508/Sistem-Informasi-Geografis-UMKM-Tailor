<?php

use App\Models\Peta;
use App\Models\Toko;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FirstPageController;
use App\Http\Controllers\Admin\PetaController;
use App\Http\Controllers\Admin\TokoController;
use App\Http\Controllers\Admin\JahitController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\KonveksiController;

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

Route::get('/', [FirstPageController::class, 'index'])->name('landing-page');
Route::get('/peta/{peta:nama}',[FirstPageController::class, 'show'])->name('landing-page.show');

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/admin/peta',[PetaController::class, 'index'])->name('peta.index')->scopeBindings();
    Route::get('/admin/peta/{peta:nama}',[PetaController::class, 'show'])->name('peta.index');
    Route::resource('/admin/toko', TokoController::class);
    Route::resource('/admin/layanan', LayananController::class);
    Route::resource('/admin/jahit', JahitController::class);
    Route::resource('/admin/konveksi', KonveksiController::class);
});


