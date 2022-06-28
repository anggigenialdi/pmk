<?php

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

Route::get('/', function () {
    return view('public.home');
});

$router->group(['prefix' => 'peternak'], function () use ($router) {
    $router->get('/', 'PeternakController@peternakIndex')->name('peternak.index');
    $router->get('/halaman', 'PeternakController@peternakCreate')->name('peternak.create');
    $router->post('/tambah', 'PeternakController@peternakPost')->name('peternak.post');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kecamatan', [App\Http\Controllers\MasterKecamatanController::class, 'index']);
Route::get('/kelurahan/{id}', [App\Http\Controllers\MasterKelurahanController::class, 'index']);

Auth::routes();