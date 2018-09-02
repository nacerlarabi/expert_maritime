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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('admin')->group(function(){

Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout.submit');
Route::get('/', 'AdminController@recu')->name('admin.recu');
Route::get('/transferes', 'AdminController@transferes')->name('admin.transferes');
Route::get('/port', 'AdminController@port')->name('admin.port');
Route::get('/port_sec', 'AdminController@port_sec')->name('admin.port_sec');
Route::get('/clients', 'AdminController@clients')->name('admin.clients');
Route::get('/persos', 'AdminController@persos')->name('admin.persos');
Route::get('/interchanges', 'AdminController@interchanges')->name('admin.interchanges');
Route::get('/listing', 'AdminController@listing')->name('admin.listing');
Route::post('/insererEmploye', 'AdminController@insererEmploye')->name('admin.insererEmploye');


});

Route::prefix('employe')->group(function(){

Route::get('/login', 'Auth\EmployeLoginController@showLoginForm')->name('employe.login');
Route::post('/login', 'Auth\EmployeLoginController@login')->name('employe.login.submit');
Route::get('/', 'EmployeController@index')->name('employe.home');
Route::get('/listing', 'EmployeController@listing')->name('employe.listing');
Route::post('/listing/insererListing', 'EmployeController@ImportListing')->name('employe.insererListing');
Route::get('/listing/{listing}/gererRapport', 'EmployeController@gererRapport')->name('employe.gererRapport');
Route::post('/listing/{listing}/ajouterRapport', 'EmployeController@ajouterRapport')->name('employe.ajouterRapport');
Route::get('/listing/{listing}/genererRapport', 'EmployeController@genererRapport')->name('employe.genererRapport');


});