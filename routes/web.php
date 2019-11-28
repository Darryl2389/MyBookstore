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

Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/about', 'PageController@about')->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/user/home', 'User\HomeController@index')->name('user.home');

Route::get('/admin/reservations', 'Admin\ReservationController@index')->name('admin.reservations.index');
Route::get('/admin/reservations/create', 'Admin\ReservationController@create')->name('admin.reservations.create');
Route::get('/admin/reservations/{id}', 'Admin\ReservationController@show')->name('admin.reservations.show');
Route::post('/admin/reservations/store', 'Admin\ReservationController@store')->name('admin.reservations.store');
Route::get('/admin/store/{id}/edit', 'Admin\ReservationController@edit')->name('admin.reservations.edit');
Route::put('/admin/reservations/{id}', 'Admin\ReservationController@update')->name('admin.reservations.update');
Route::delete('/admin/reservations/{id}/destroy', 'Admin\ReservationController@destroy')->name('admin.reservations.destroy');

Route::get('/user/reservations', 'User\ReservationController@index')->name('user.reservations.index');
Route::get('/user/reservations/{id}', 'User\ReservationController@show')->name('user.reservations.show');

Route::get('/user/restaurants', 'User\RestaurantController@welcome')->name('user.restaurants.welcome');
Route::get('/user/restaurants/{id}', 'User\RestaurantController@show')->name('user.restaurants.show');
