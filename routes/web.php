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


Route::get('/', 'HomeController@Login');
Route::get('/login', function(){
	return redirect('/'); 
});
Route::get('/dashboard', 'HomeController@index');
Route::post('/search', 'HomeController@search');
Route::post('/login', 'HomeController@LoginFunc');
Route::post('/logout', 'HomeController@Logout');
Route::post('/whatsapp', 'HomeController@whatsappsend');
Route::post('/description', 'HomeController@descriptionsend');
Route::post('/addasana', 'HomeController@addasanafunc');
Route::post('/whatsapplink', 'HomeController@whatsapplinksend');
Route::post('/add-edit-gst', 'HomeController@AddEditGST');
Route::put('/edit-acount-details', 'HomeController@EditAccountDetails');
Route::put('/edit-user-bio', 'HomeController@EditUserBio');

