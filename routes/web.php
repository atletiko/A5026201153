<?php

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


Route::get('/', function () { //halaman utama
    return view('welcome');
});


//tambahkan disini untuk link route tugas 4

Route::get('p/film-musik/musik', function () {
    //yang disini tidak banyak proses / persiapan me load form
    return view('htmlprak2');
});

Route::get('praktikum2', function () {
    //yang disini tidak banyak proses / persiapan me load form
    return view('htmlprak2update');
});

//jika ternyata kasusnya butuh ngeload banyak proses
Route::get('ets',"ViewController@showForm") ;

Route::get('isiannama',"ViewController@showForm") ;
Route::post('greetings',"ViewController@resultGreetings");


//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
