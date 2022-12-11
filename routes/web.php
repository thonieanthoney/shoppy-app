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

Route::get('/', function () {
    return view('items');
});
Route::get('/item', function () {
    return view('item');
});
Route::get('/create', function () {
    return view('items');
});
Route::get('/updateitem', function () {
    return view('updateitem');
});
Route::get('/delete', function () {
    return view('mod');
});
Route::get('/search', function () {
    return view('find');
});
Route::get('/additem', function () {
    return view('additem');
});
