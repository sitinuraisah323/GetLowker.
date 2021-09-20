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

Route::get('log', function () {
    return view('Auth.login');
});

 Route::resource('/', 'firstController');
Route::resource('/cariLowker', 'cariLowkerController');
 
Auth::routes();

        Route::get('/home', 'HomeController@index');
Route::middleware(['auth'])->group( function(){

    Route::middleware(['Admin'])->group( function(){

        Route::resource('admin', 'AdminController');
        Route::resource('dataUser', 'UserAdminController');
        Route::resource('/perusahaan', 'PerusahaanController');
        Route::resource('lowker1', 'LowkerController');
        Route::resource('profilAdmin', 'profilAdminController');
    });

    
    Route::middleware(['User'])->group( function(){

        Route::resource('user', 'UserController');
        Route::resource('profil', 'ProfilController');
        Route::resource('lamar', 'LamarController');

    });
   
    Route::get('logout', function() {
        Auth::logout();
        return redirect('/');
    });
});


