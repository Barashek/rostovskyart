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

Route::get('/main', function () {
    return redirect('/');
});
Route::get('/index', function () {
    return redirect('/');
});
Route::get('/', 'MainController@index');
Route::get('/about', 'AboutController@index');
Route::get('/biography', 'BiographyController@index');
Route::get('/gallery', 'GalleryController@index');
Route::get('/expositions', 'ExpositionsController@index');
Route::get('/contacts', 'ContactsController@index');
Route::get('/getgallery', 'AjaxController@index');
Route::get('/mir', 'MirController@index');
Route::get('/iss', 'ISSController@index');
