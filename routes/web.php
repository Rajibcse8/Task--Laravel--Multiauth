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

//Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','HomeController@logout')->name('logout');




Route::group(['middleware'=>['auth','preventUser']] ,function(){

    
     Route::get('/dashboard','AdduserController@index');  
     Route::get('adduser', 'AdduserController@create');
     Route::post('adduser', 'AdduserController@store')->name('adduser.store');   

});

//  Route::get('/demo',function(){
//     return view('dashboard');
//  });




 
