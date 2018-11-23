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

Route::get('/', 'FeedbackController@feedback_home')->name('feedback.home');
Route::post('feedback_submit','FeedbackController@feedback_submit')->name('feedback.submit');

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/','AdminController@feedback');
    Route::get('feedback','AdminController@feedback')->name('feedback');

    Route::get('agents','AdminController@agents')->name('agents');
    Route::get('agents/{agent}/edit','AgentController@show')->name('agents.show');
    Route::post('agents/{agent}','AgentController@update')->name('agents.update');
    Route::get('agents/{agent}/delete','AgentController@destroy')->name('agents.destroy');
    Route::get('agents/create','AgentController@create')->name('agents.create');
    Route::post('agents','AgentController@store')->name('agents.store');

    Route::get('accounts','AdminController@accounts')->name('accounts');
    Route::get('accounts/{account}/edit','AccountController@show')->name('accounts.show');
    Route::post('accounts/{account}','AccountController@update')->name('accounts.update');
    Route::get('accounts/{account}/delete','AccountController@destroy')->name('accounts.destroy');
    Route::get('accounts/create','AccountController@create')->name('accounts.create');
    Route::post('accounts','AccountController@store')->name('accounts.store');

    Route::get('users','AdminController@users')->name('users');
    Route::get('users/create','UsersController@create')->name('users.create');
    Route::post('users','UsersController@store')->name('users.store');
    Route::get('users/{users}/edit','UsersController@show')->name('users.show');
    Route::post('users/{users}','UsersController@update')->name('users.update');
    Route::get('users/{users}/delete','UsersController@destroy')->name('users.destroy');

    Route::get('feedback_logout','AdminController@feedback_logout')->name('feedback_logout');
});
Auth::routes();
