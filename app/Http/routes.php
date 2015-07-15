<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// crash and jxcode
//******************************************************************************************************
// index
Route::get('/', 'HomepageController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Authenticated routes...
Route::group(['middleware' => 'auth'], function () {
    // Home
    Route::get('home', function() {
        return view('home.index');
    });

    // Q&A
    Route::get('qa/create', 'QaController@create');
});
//******************************************************************************************************


// Q&A
//******************************************************************************************************
Route::get('qa', 'QaController@index');
//******************************************************************************************************


//Department and club
//******************************************************************************************************
Route::get('department/backstage', array('as' => 'backstage_department', 'uses' => 'Department\ClubController@index'));
Route::post('department/new', $arrayName = array('as' => 'department/new', 'uses' => 'Department\ClubController@store'));
Route::get('department/1', 'Department\ClubController@department1');
Route::get('department/2', 'Department\ClubController@department2');
Route::get('department/3', 'Department\ClubController@department3');
Route::get('department/4', 'Department\ClubController@department4');
Route::get('department/5', 'Department\ClubController@department5');
Route::get('department/6', 'Department\ClubController@department6');
Route::get('department/7', 'Department\ClubController@department7');
Route::get('department/8', 'Department\ClubController@department8');
Route::get('department/9', 'Department\ClubController@club1');
Route::get('department/10', 'Department\ClubController@club2');
Route::get('department/11', 'Department\ClubController@club3');
Route::get('department/12', 'Department\ClubController@club4');
Route::get('department/13', 'Department\ClubController@club5');
//******************************************************************************************************


//Campus
//******************************************************************************************************
Route::get('campus', 'Campus\CampusController@index');
//******************************************************************************************************


//Document
//******************************************************************************************************
//Route::get('document', array('as' => 'document', 'uses' => 'documentController@index'))
//後台新增公告
Route::get('backstage_document', function () {
    return view('document/backstage_important_cal');
});
//抓在哪個分頁
//Route::get('document/{}/{}/{}', function($, $, $){});
//******************************************************************************************************

// video
//******************************************************************************************************
Route::get('video2', function () {
    return view('video2');
});
//******************************************************************************************************
