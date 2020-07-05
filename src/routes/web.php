<?php

use App\Http\Controllers\PathController;
use App\Resume;
use App\ResumeTemplate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


//Views
Route::get('/', 'PathController@home');
Route::get('/login', 'PathController@login');
Route::get('/dashboard', 'PathController@dashboard');
Route::get('/dashboard/create', 'PathController@create');

//Requests
Route::get('auth/social/{provider}', 'AuthController@redirectToProvider');
Route::get('auth/social/{provider}/callback', 'AuthController@handleProviderCallback');
Route::post('auth/login', 'AuthController@attemptLogin');
Route::get('auth/logout', 'AuthController@logout');