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
    Route::get('videos', 'VideoController@index')->name('admin-videos');
    Route::get('academy', 'AcademyController@index')->name('admin-academy');
    Route::get('settings', 'HomeController@index')->name('admin-settings');
    Route::get('pictures', 'HomeController@index')->name('admin-pictures');
    Route::get('team', 'TeamController@index')->name('admin-team');
    Route::get('sponser', 'SponserController@index')->name('admin-sponser');

    Route::get('videos/new', 'VideoController@create')->name('admin-videos-new');
    Route::get('academy/new', 'AcademyController@create')->name('admin-academy-new');
    Route::get('pictures/new', 'HomeController@index')->name('admin-pictures-new');
    Route::get('team/new', 'TeamController@create')->name('admin-team-new');
    Route::get('sponser/new', 'SponserController@create')->name('admin-sponser-new');

    Route::get('videos/delete/{video}', 'VideoController@destroy')->name('admin-videos-delete');
    Route::get('academy/delete/{academy}', 'AcademyController@destroy')->name('admin-academy-delete');
    Route::get('pictures/delete/{id}', 'HomeController@index')->name('admin-pictures-delete');
    Route::get('team/delete/{team}', 'TeamController@destroy')->name('admin-team-delete');
    Route::get('sponser/delete/{sponser}', 'SponserController@destroy')->name('admin-sponser-delete');

    Route::get('videos/edit/{video}', 'VideoController@edit')->name('admin-videos-edit');
    Route::get('academy/edit/{academy}', 'AcademyController@edit')->name('admin-academy-edit');
    Route::get('pictures/edit/{id}', 'HomeController@index')->name('admin-pictures-edit');
    Route::get('team/edit/{team}', 'TeamController@edit')->name('admin-team-edit');
    Route::get('sponser/edit/{sponser}', 'SponserController@edit')->name('admin-sponser-edit');

    Route::get('videos/show/{video}', 'VideoController@showAjax')->name('admin-videos-show');
    Route::get('academy/show/{academy}', 'AcademyController@showAjax')->name('admin-academy-show');
    Route::get('pictures/show/{id}', 'HomeController@index')->name('admin-pictures-show');
    Route::get('team/show/{team}', 'TeamController@showAjax')->name('admin-team-show');
    Route::get('sponser/show/{sponser}', 'SponserController@showAjax')->name('admin-sponser-show');

    Route::post('videos/update/{video}', 'VideoController@update')->name('admin-videos-update');
    Route::post('academy/update/{academy}', 'AcademyController@update')->name('admin-academy-update');
    Route::post('settings/update', 'HomeController@index')->name('admin-settings-update');
    Route::post('pictures/update', 'HomeController@index')->name('admin-pictures-update');
    Route::post('team/update/{team}', 'TeamController@update')->name('admin-team-update');
    Route::post('sponser/update/{sponser}', 'SponserController@update')->name('admin-sponser-update');


    Route::post('videos/add', 'VideoController@store')->name('admin-videos-add');
    Route::post('academy/add', 'AcademyController@store')->name('admin-academy-add');
    Route::post('pictures/add', 'HomeController@index')->name('admin-pictures-add');
    Route::post('team/add', 'TeamController@store')->name('admin-team-add');
    Route::post('sponser/add', 'SponserController@store')->name('admin-sponser-add');
});

