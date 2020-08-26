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
use App\Http\Controllers\welcomeController;
Route::group(['namespace'=>'Front'],function(){
    Route::get('/','FrontController@getIndex');
    Route::get('/landing','FrontController@getLanding');
    Route::get('/about','FrontController@getAbout');

});


Route::get('/about-me/id/{id}/user/{user}','welcomeController@index')->where(['id'=>'[0-9]+','user'=>'[A-Z]+'])->name('aboutMe');

Auth::routes(['verify'=>'true']);

Route::get('/home', 'HomeController@index')->name('home');
