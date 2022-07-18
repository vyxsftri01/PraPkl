<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pengenalancontroller;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\staffbranchController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\branchController;
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

Route::get('/welcome', function () {
    echo '<u>';
    echo '<center>Hello semuanya, apa kabar?<br>';
    echo 'Pada kali ini kita sedang belajar route basic</center>';
    echo '</u>';
    
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/pages1', function () {
    return view('pages1.index');
});


Route::get('/pages2', function () {
    return view('pages2.index');
});

//Route basic
Route::get('/pages3', function () {
    return view('pages3.index');
});

Route::get('/biodata/{nama}', function ($nama) {
    return view('pages1.biodata', compact('nama'));
});

//Route Option Parameter
Route::get('/pesanan/{minuman?}', function ($minuman = 'kosong') {
    return view('pages1.pesanan', compact('minuman'));
});


Route::get('/biodata2/{nama}/{umur}/{alamat}/{jk}/{hobby}', function ($a,$b,$c,$d,$e) {
    return view('pages1.biodata2', compact('a','b','c','d','e'));
});

//Route Option Parameter
Route::get('/material/{pesanan?}/{pesanan1?}', function ($pesanan,$pesanan1 = 'kosong') {
    return view('pages1.material', compact('pesanan','pesanan1'));
});

Route::get('/pengenalan',[App\Http\Controllers\Pengenalancontroller::class,'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}',[Pengenalancontroller::class,'intro']);

Route::get('/siswa',[Pengenalancontroller::class,'siswa']);

Route::get('/menu1',[LatihanController::class,'menu']);

Route::get('/dosen',[LatihanController::class,'dosen']);

Route::get('/stasiun',[LatihanController::class,'stasiun']);

Route::get('/belanja',[LatihanController::class,'belanja']);

Route::get('/post',[PostController::class,'index']);

Route::get('/StaffBranch',[staffbranchController::class,'index2']);

Route::get('/Staff',[StaffController::class,'index3']);

Route::get('/branch',[branchController::class,'index4']);
