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

Route::view('/', 'pages.home');
Route::view('/about', 'pages.about');
Route::prefix('/department')->group(function () {
Route::view('/aviation', 'pages.aviation');
Route::view('/aviation', 'pages.aviation');
Route::view('/engineering', 'pages.engineering');
Route::view('/medical', 'pages.medical');
Route::view('/law', 'pages.law');
});
Route::view('/events', 'pages.events');
Route::view('/departments', 'pages.departments');
Route::view('/contact', 'pages.contact');

