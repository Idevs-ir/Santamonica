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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::prefix('administrator')->middleware('auth')->group(function(){
    Route::get('', 'HomeController@index')->name('home');
    Route::get('videos', 'HomeController@index')->name('admin-videos');
    Route::get('academy', 'AcademyController@index')->name('admin-academy');
    Route::get('settings', 'HomeController@index')->name('admin-settings');
    Route::get('pictures', 'HomeController@index')->name('admin-pictures');
    Route::get('team', 'HomeController@index')->name('admin-team');

    Route::get('videos/new', 'HomeController@index')->name('admin-videos-new');
    Route::get('academy/new', 'HomeController@index')->name('admin-academy-new');
    Route::get('pictures/new', 'HomeController@index')->name('admin-pictures-new');
    Route::get('team/new', 'HomeController@index')->name('admin-team-new');

    Route::get('videos/delete/{id}', 'HomeController@index')->name('admin-videos-delete');
    Route::get('academy/delete/{id}', 'HomeController@index')->name('admin-academy-delete');
    Route::get('pictures/delete/{id}', 'HomeController@index')->name('admin-pictures-delete');
    Route::get('team/delete/{id}', 'HomeController@index')->name('admin-team-delete');

    Route::get('videos/edit/{id}', 'HomeController@index')->name('admin-videos-edit');
    Route::get('academy/edit/{id}', 'HomeController@index')->name('admin-academy-edit');
    Route::get('pictures/edit/{id}', 'HomeController@index')->name('admin-pictures-edit');
    Route::get('team/edit/{id}', 'HomeController@index')->name('admin-team-edit');

    Route::get('videos/show/{id}', 'HomeController@index')->name('admin-videos-show');
    Route::get('academy/show/{academy}', 'AcademyController@showAjax')->name('admin-academy-show');
    Route::get('pictures/show/{id}', 'HomeController@index')->name('admin-pictures-show');
    Route::get('team/show/{id}', 'HomeController@index')->name('admin-team-show');

    Route::post('videos/update', 'HomeController@index')->name('admin-videos-update');
    Route::post('academy/update', 'HomeController@index')->name('admin-academy-update');
    Route::post('settings/update', 'HomeController@index')->name('admin-settings-update');
    Route::post('pictures/update', 'HomeController@index')->name('admin-pictures-update');
    Route::post('team/update', 'HomeController@index')->name('admin-team-update');

    Route::post('videos/add', 'HomeController@index')->name('admin-videos-add');
    Route::post('academy/add', 'HomeController@index')->name('admin-academy-add');
    Route::post('pictures/add', 'HomeController@index')->name('admin-pictures-add');
    Route::post('team/add', 'HomeController@index')->name('admin-team-add');
});

