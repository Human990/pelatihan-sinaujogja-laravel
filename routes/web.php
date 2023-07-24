<?php

use App\Models\Divisi;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/latihan', function(){
    return view('latihan');
});

Route::get('/daftar', function(){
    $data['kode'] = 'A81';
    $data['lokasi'] = 'Yogyakarta';
    $data['divisi'] = Divisi::all();
    return view('daftar',$data);
});

Route::get('/form', function(){
    return view('divisi.form');
});

Route::get('/destroy', function(){
    return view('divisi.destroy');
});
