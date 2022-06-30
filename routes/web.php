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
Route::get('/geojson', [App\Http\Controllers\PmkController::class, 'getJson'])->name('geojson');

Route::get('/', function () {
    return view('public.home');
});

$router->group(['prefix' => 'peternak'], function () use ($router) {
    $router->get('/', 'PeternakController@peternakIndex')->name('peternak.index');
    $router->get('/data-peternak', 'PeternakController@peternakIndex')->name('data-peternak.index');
    $router->get('/halaman', 'PeternakController@peternakCreate')->name('peternak.create');
    $router->post('/tambah', 'PeternakController@peternakPost')->name('peternak.post');
});

$router->group(['prefix' => 'data-pmk'], function () use ($router) {
    $router->get('/', 'PmkController@pmkIndex')->name('data-pmk.index');
    $router->get('/halaman/{id}', 'PmkController@pmkCreate')->name('pmk.create');
    $router->post('/tambah{id}', 'PmkController@pmkPost')->name('pmk.post');
});

Auth::routes();
$router->get('/data-ternak', 'PeternakController@index')->name('dataternak.index');
$router->get('/data-ternak/{id}', 'PeternakController@getDataPerKecamatan')->name('dataternak.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kecamatan', [App\Http\Controllers\MasterKecamatanController::class, 'index']);
Route::get('/kelurahan/{id}', [App\Http\Controllers\MasterKelurahanController::class, 'index']);


$router->group(['prefix' => 'master-pengguna'], function () use ($router) {
    $router->get('/pengguna', 'MasterPenggunaController@masterPenggunaIndex')->name('master-pengguna.index');
    $router->post('/tambah', 'MasterPenggunaController@masterPenggunaPost')->name('master-pengguna.post');
});
