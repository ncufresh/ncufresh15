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
});
//******************************************************************************************************


// Q&A
//******************************************************************************************************
Route::get ('qa/questions'   , 'QaController@index_questions');
Route::get ('qa/create'      , 'QaController@create_question');
Route::post('qa/create'      , 'QaController@store_question');
Route::get ('qa/answer'      , 'QaController@create_answer');
Route::post('qa/answer'      , 'QaController@store_answer');
Route::get ('qa/edit/{id}'   , 'QaController@edit');
Route::post('qa/update/{id}' , 'QaController@update');
Route::get ('qa/delete/{id}' , 'QaController@destroy');
Route::get ('qa/view'        , 'QaController@view');
Route::get ('qa/solved'      , 'QaController@solved');
Route::get ('qa/{category?}' , 'QaController@index');
//******************************************************************************************************


//Department and club
//******************************************************************************************************
Route::get('department/backstage', array('as' => 'backstage_department', 'uses' => 'Department\ClubController@index'));
Route::post('department/new', 'Department\NewClubController@store');
//******************************************************************************************************


//Campus
//******************************************************************************************************
Route::get('campus', 'Campus\CampusController@index');
Route::post('campus/backstage_intro', 'Campus\IntroController@store');
Route::get('campus/{view_id}', 'Campus\CampusController@showIntro');
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
