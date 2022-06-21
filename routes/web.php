<?php

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
    return view('welcome');
});

Auth::routes();

// Routing untuk role Admin dan User
Route::group(['middleware' => ['auth','checkRole:Admin,User']], function(){

    // Home
    Route::get('/home', 'HomeController@index');
    Route::get('/about', 'HomeController@viewAbout');
    Route::get('/contact', 'HomeController@viewContact');
    Route::get('/myprofile', 'HomeController@viewProfile');

    // Dokter
    Route::get('/masterdata/dokter', 'DokterController@viewDokter');
    Route::get('/masterdata/dokter/search', 'DokterController@searchDtr');

    // Pasien
    Route::get('/masterdata/pasien', 'PasienController@viewPasien');
    Route::get('/masterdata/pasien/search', 'PasienController@searchPsn');

    // Ruangan
    Route::get('/masterdata/ruangan', 'RuanganController@viewRuangan');
    Route::get('/masterdata/ruangan/search', 'RuanganController@searchRrg');
});

// Routing untuk role Admin
Route::group(['middleware' => ['auth','checkRole:Admin']], function(){
    
    // Home
    Route::get('/about/edit/{id}', 'HomeController@editAbout');
    Route::put('/about/updated/{id}', 'HomeController@updatedAbout');
    Route::get('/contact/edit/{id}', 'HomeController@editContact');
    Route::put('/contact/updated/{id}', 'HomeController@updatedContact');

    // Pasien
    Route::get('/masterdata/pasien/tambah', 'PasienController@tambahPsn');
    Route::post('/masterdata/pasien/simpan', 'PasienController@simpanPsn');
    Route::get('/masterdata/pasien/edit/{id}', 'PasienController@editPsn');
    Route::put('/masterdata/pasien/updated/{id}', 'PasienController@updatedPsn');
    Route::get('/masterdata/pasien/delete/{id}', 'PasienController@deletePsn');

    // Dokter
    Route::get('/masterdata/dokter/tambah', 'DokterController@tambahDtr');
    Route::post('/masterdata/dokter/simpan', 'DokterController@simpanDtr');
    Route::get('/masterdata/dokter/edit/{id}', 'DokterController@editDtr');
    Route::put('/masterdata/dokter/updated/{id}', 'DokterController@updatedDtr');
    Route::get('/masterdata/dokter/delete/{id}', 'DokterController@deleteDtr');

    // Ruangan
    Route::get('/masterdata/ruangan/tambah', 'RuanganController@tambahRrg');
    Route::post('/masterdata/ruangan/simpan', 'RuanganController@simpanRrg');
    Route::get('/masterdata/ruangan/edit/{id}', 'RuanganController@editRrg');
    Route::put('/masterdata/ruangan/updated/{id}', 'RuanganController@updatedRrg');
    Route::get('/masterdata/ruangan/delete/{id}', 'RuanganController@deleteRrg');

    // User
    Route::get('/masterdata/user', 'UserController@viewUser');
    Route::get('/masterdata/user/search', 'UserController@searchUsr');
});
