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

Route::get('/', function () {return view('welcome');});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\AppController@dahboard')->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/account-setup', 'App\Http\Controllers\AppController@accountSetup')->name('accountSetup');
Route::middleware(['auth:sanctum', 'verified'])->post('/account-setup', 'App\Http\Controllers\AppController@accountSetupPost')->name('accountSetupPost');
Route::get('auth/google', 'App\Http\Controllers\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'App\Http\Controllers\GoogleController@handleGoogleCallback');
