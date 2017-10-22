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
Route::group(['prefix' => 'admin'], function(){
	Route::get('/','AdminController@index')->name('admin.index');

	Route::resource('province', 'ProvinceController');
	Route::get('/province-table/', 'ProvinceController@table')->name('province.table');

	Route::resource('municipality', 'MunicipalityController');

	Route::get('/municipality-table/', 'MunicipalityController@table')->name('municipality.table');

	Route::resource('barangay', 'BarangayController');
	Route::get('/barangay-table/', 'BarangayController@table')->name('barangay.table');

	Route::resource('destination', 'DestinationController');
	Route::get('/destination/create/{province}', 'DestinationController@getMunicipality')->name('destination.getMunicipality');
	Route::get('/destination/create/{province}/{municipality}', 'DestinationController@getBarangay')->name('destination.getBarangay');
	Route::get('/destination-table/', 'DestinationController@table')->name('destination.table');

	Route::resource('official', 'OfficialController');
	Route::get('/official-table/', 'OfficialController@table')->name('official.table');

	Route::resource('event', 'EventController');
	Route::get('/event-table/', 'EventController@table')->name('event.table');

	Route::resource('article', 'Articlecontroller');
	Route::get('/article-table/', 'Articlecontroller@table')->name('article.table');


});
Route::get('/shit',function(){
	return "Earl";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'website'], function(){
	Route::get('index','WebController@index')->name('home');
	Route::get('about','WebController@about')->name('about');
	Route::get('destinations','WebController@destinations')->name('destinations');
});


