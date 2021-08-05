<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropietarioController;

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
    return view('auth.login');
})->name('inicio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/propietario', PropietarioController::class, ['names' => 'propietario', 'only' => [
        'index', 'store', 'update' , 'destroy'
]]);

//comandos por browser
//limpiar cache
Route::get('/config-clean-cache-dev-2021-08-05', function () {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:cache');
    return 'refresh cache Ok';
});

//refrescar db y cargar seenders
Route::get('/config-db-refactori-dev-2021-08-05', function () {
    $exitCode = Artisan::call('migrate:fresh --seed');
//    $exitCode = Artisan::call('db:seed --class=UserSeeder');
    return 'refresh db Ok';
});
