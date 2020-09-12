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

Route::get('a-propos', function () {
    return view('pages.about');
});

Route::view('contact', 'pages.contact');

Route::get('events', 'EventsController@list');

Route::get('clients', 'ClientsController@list');
Route::post('clients', 'ClientsController@store');