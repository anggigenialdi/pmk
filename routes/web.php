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
Route::get('/kurban/peta', [App\Http\Controllers\MasterKurbanController::class, 'index'])->name('kurban.peta');
Route::get('/kurban/all', [App\Http\Controllers\MasterKurbanController::class, 'indexKurban']);
Route::get('/kurban/{id}', [App\Http\Controllers\MasterKurbanController::class, 'getDataPerKecamatan']);
Route::get('/kurban', [App\Http\Controllers\MasterKurbanController::class, 'jumlahKumulatif']);

Route::get('/tabel-kurban', [App\Http\Controllers\MasterKurbanController::class, 'tabelKurban'])->name('tabel-kurban.index');

$router->group(['prefix' => 'peternak'], function () use ($router) {
    $router->get('/', 'PeternakController@peternakIndex')->name('peternak.index');
    $router->get('/data-peternak', 'PeternakController@peternakIndex')->name('data-peternak.index');
    $router->get('/halaman', 'PeternakController@peternakCreate')->name('peternak.create');
    $router->post('/tambah', 'PeternakController@peternakPost')->name('peternak.post');
    $router->get('/detail/{id}', 'PeternakController@peternakDetail')->name('peternak.detail');
    $router->get('/edit/{id}', 'PeternakController@peternakEdit')->name('peternak.edit');
    $router->post('/update/{id}', 'PeternakController@peternakUpdate')->name('peternak.update');
});

$router->group(['prefix' => 'data-pmk'], function () use ($router) {
    $router->get('/', 'PmkController@pmkIndex')->name('data-pmk.index');
    $router->get('/halaman/{id}', 'PmkController@pmkCreate')->name('pmk.create');
    $router->post('/tambah/{id}', 'PmkController@pmkPost')->name('pmk.post');
    $router->get('/detail/{id}', 'PmkController@pmkDetail')->name('pmk.detail');
    $router->get('/edit/{id}', 'PmkController@pmkEdit')->name('pmk.edit');
    $router->post('/update/{id}', 'PmkController@pmkUpdate')->name('pmk.update');
    // data hasil pengujian lab
    $router->post('/hasil-lab/{id}', 'PmkController@pmkPostLab')->name('pmk-lab.post');
    $router->get('/hasil-lab', 'PmkController@hasilLabIndex')->name('hasil-lab.index');
    $router->get('/hasil-lab/detail/{id}', 'PmkController@hasilLabDetail')->name('hasil-lab.detail');
    $router->post('/hasil-lab/update/{id}', 'PmkController@hasilLabUpdate')->name('hasil-lab.update');
    // perkembangan kasus
    $router->get('/perkembangan-kasus', 'PmkController@perkembanganIndex')->name('data-perkembangan.index');
    $router->post('/perkembangan-kasus/{id}', 'PmkController@perkembanganPost')->name('data-perkembangan.post');

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

$router->get('/tabel-pmk', 'PeternakController@tabelPmk')->name('tabel-pmk.index');
$router->get('/kumulatif', 'PeternakController@jumlahKasusKumulatif')->name('data.kumulatif');

$router->group(['prefix' => 'master-kurban'], function () use ($router) {
    $router->get('/', 'MasterKurbanController@masterKurbanIndex')->name('master-kurban.index');
    $router->get('/create', 'MasterKurbanController@masterKurbanCreate')->name('master-kurban.create');
    $router->post('/tambah', 'MasterKurbanController@masterKurbanPost')->name('master-kurban.post');
    $router->get('/detail/{id}', 'MasterKurbanController@masterKurbanDetail')->name('master-kurban.detail');
    $router->get('/edit/{id}', 'MasterKurbanController@masterKurbanEdit')->name('master-kurban.edit');
    $router->post('/update/{id}', 'MasterKurbanController@masterKurbanUpdate')->name('master-kurban.update');
});

Route::get('tabel-kurban-export',[App\Http\Controllers\MasterKurbanController::class, 'tabelKurbanExport'])->name('tabel-kurban.export');
