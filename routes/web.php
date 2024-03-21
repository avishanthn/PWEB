<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\isengController1;
use App\Http\Controllers\isengController2;
//import java.io.*; di java

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
    return view('welcome');
}); //hanya cocok untuk simple redirect

//Route.get("Saya",Link); di java

Route::get('halo', function () {
	return "<marquee>Halo, Selamat datang di tutorial laravel www.malasngoding.com</marquee>";
});

Route::get('blog', function () {
	return view('blog');
});

//Route::get('dosen', 'DosenController@index');

//Route::get('/pegawai/{nama}', 'PegawaiController@index');

//Route::get('/formulir', 'PegawaiController@formulir');
//Route::post('/formulir/proses', 'PegawaiController@proses');

Route::controller(DosenController::class)->group(function () {
    Route::get('dosen', 'index');
});

Route::controller(PegawaiController::class)->group(function () {
    Route::get('/pegawai_perusahaan/{nama}', 'index');
    Route::get('/formulir', 'formulir');
    Route::post('/formulir/proses', 'proses');
});

//route blog
/*Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak'); */

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'home');
    Route::get('/blog/tentang', 'tentang');
    Route::post('/blog/kontak', 'kontak');
});

//route CRUD
//Route::get('/pegawai','PegawaiDBController@index');
//Route::get('/pegawai/edit/{id}','PegawaiDBController@edit');
//Route::post('/pegawai/update','PegawaiDBController@update');
//Route::get('/pegawai/hapus/{id}','PegawaiDBController@hapus');
//Route::get('/pegawai/tambah','PegawaiDBController@tambah');
//Route::post('/pegawai/store','PegawaiDBController@store');

Route::controller(PegawaiDBController::class)->group(function () {
    Route::get('/pegawai', 'index');
    Route::get('/pegawai/tambah', 'tambah');
    Route::post('/pegawai/store', 'store');
    Route::get('/pegawai/edit/{id}', 'edit');
    Route::post('/pegawai/update', 'update');
    Route::get('/pegawai/hapus/{id}', 'hapus');
});

Route::controller(isengController1::class)->group(function () {
    Route::get('/iseng1', 'index');
    Route::get('/iseng1/tambah', 'tambah');
    Route::post('/iseng1/store', 'store');
});

Route::controller(isengController2::class)->group(function () {
    Route::get('/iseng1', 'index');
    Route::get('/iseng1/edit/{id}', 'edit');
    Route::post('/iseng1/update', 'update');
    Route::get('/iseng1/hapus/{id}', 'hapus');
});








