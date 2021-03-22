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
Route::prefix('/solutions')->group(function () {
Route::view('/unmannedAircraftSystems', 'pages.unmannedAircraftSystems');
Route::view('/aviationSafety', 'pages.aviationSafety');
Route::view('/aviationBusiness', 'pages.aviationBusiness');
Route::view('/consulting', 'pages.consulting');
});
Route::view('/events', 'pages.events');
Route::view('/solutions', 'pages.solutions');
Route::view('/contact', 'pages.contact');

