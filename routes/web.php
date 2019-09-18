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
})->name('welcome');

Route::get('/news', 'NewsController@index')->name('news');

Auth::routes();

Route::post('donation/store', 'DonationController@store')->name('donation.store'); // 保存処理

Route::get('/home', 'HomeController@index')->name('home');
Route::put('/home/update_name', 'HomeController@updateName')->name('home.update.name'); // 更新処理
Route::put('/home/update_email', 'HomeController@updateEmail')->name('home.update.email'); // 更新処理
Route::put('/home/update_password', 'HomeController@updatePassword')->name('home.update.password'); // 更新処理
Route::put('/home/delete_user', 'HomeController@deleteUser')->name('home.delete.user'); // 削除処理

Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout'
]);

Route::get('/terms', function() {
    return view('terms');
})->name('terms');

Route::get('/privacy', function() {
    return view('privacy');
})->name('privacy');

Route::get('contact/form', function() {
    return view('contact.form');
});

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/confirm', 'ContactController@confirm')->name('confirm');
Route::post('contact/sent', 'ContactController@sent')->name('sent');
