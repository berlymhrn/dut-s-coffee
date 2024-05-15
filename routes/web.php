<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home.index');
});
Route::get('/visi-misi', function () {
    return view('pages.visi misi.index');
});
Route::get('/daftar-barista', function () {
    return view('pages.daftar barista.index');
});
Route::get('/menu-coffee', function () {
    return view('pages.menu.coffee');
});
Route::get('/menu-non-coffee', function () {
    return view('pages.menu.nonCoffee');
});
Route::get('/menu-food', function () {
    return view('pages.menu.food');
});
Route::get('/gallery', function () {
    return view('pages.gallery.index');
});
Route::get('/kontak-kami', function () {
    return view('pages.kontak.index');
});
