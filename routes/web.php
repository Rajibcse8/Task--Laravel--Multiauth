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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/dashboard',function(){
//    return view('dashboard');
// });

Route::group(['middleware'=>['auth']] ,function(){

    Route::get('logout','HomeController@logout')->name('logout');

    Route::get('/dashboard',function(){
        return view('template.home');
     });
    
     Route::get('adduser', 'AdduserController@create');
     Route::post('adduser', 'AdduserController@store')->name('adduser.store');
   
     

});


 
