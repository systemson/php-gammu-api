<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('inbox', 'Api\InboxController@index')->name('inbox.index');
Route::get('inbox/{id}', 'Api\InboxController@show')->name('inbox.show');
Route::get('outbox', 'Api\OutboxController@index')->name('outbox.list');
Route::post('outbox', 'Api\OutboxController@store')->name('outbox.store');
Route::get('outbox/{id}', 'Api\OutboxController@show')->name('outbox.show');
Route::get('sent', 'Api\SentController@index')->name('sent.list');
Route::get('sent/{id}', 'Api\SentController@show')->name('sent.show');
Route::get('phones', 'Api\PhonesController@index')->name('phones.list');
Route::get('phones/{id}', 'Api\PhonesController@show')->name('phones.show');