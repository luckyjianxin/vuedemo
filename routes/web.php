<?php

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

//Auth::routes();

Route::get('/', 'LoginController@getLogin')->name('/');
Route::post('/login', 'LoginController@postLogin')->name('login');



Route::group(['middleware' => ['authen']], function() {
	Route::get('/dashboard', 'DashborarController@dashboard')->name('dashboard');
	Route::get('/logout', 'LoginController@getLogout')->name('logout');
});

Route::group(['middleware' => ['authen', 'roles'], 'roles' => ['admin']], function() {
	Route::get('/createUser', function() {
		echo 'admin test';
	});
});

Route::get('/noPermission', function() {
	return view('errors.noPermission');
})->name('noPermission');

