<?php

use App\Http\Controllers\MatchController;
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

Route::get('/','HomeController@index')->name('teams');
Route::get('squad/{id}','HomeController@show')->name('team.show');
Route::get('matches','MatchController@index')->name('matches');
Route::get('points','PointController@index')->name('points');
