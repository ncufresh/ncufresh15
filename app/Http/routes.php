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

//Admin of Homepage
Route::get('/admin', 'AdminController@index');

//Announcement on Homepage
Route::post('/ann/new', 'AnnouncementController@store');
Route::get('/ann/delete/{id}', 'AnnouncementController@destroy');
Route::post('/ann/update/{id}', 'AnnouncementController@update');

// Calender on Homepage
Route::get('/calender', 'CalenderController@get');
Route::post('/cal/new', 'CalenderController@store');
Route::get('/cal/delete/{id}', 'CalenderController@destroy');
Route::post('/cal/update/{id}', 'CalenderController@update');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// show user
Route::get('user'     , 'UserController@index');
Route::get('user/{id}', 'UserController@show');

// Q&A
//------------------------------------------------------------------------------------------------------
Route::get ('qa' , 'QaController@index');
Route::get ('qa/{id}' , 'QaController@show')->where('id', '[0-9]+');
Route::get ('qa/view' , 'QaController@view');
Route::get ('qa/category/{category?}' , 'QaController@index');
Route::get ('qa/submitted' , function() {
    return view('qa.submitted');
});
//------------------------------------------------------------------------------------------------------
Route::get('file/{id}', 'FileController@show');

// Authenticated routes...
Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::group(['middleware' => 'permission:admin'], function() {
        Route::get ('user/edit/{id}'  , 'UserController@edit');
        Route::post('user/update/{id}'  , 'UserController@update');
        Route::get ('user/delete/{id}', 'UserController@destroy');
    });

    // Home
    Route::get('home', function() {
        return view('home.index');
    });

    // Manage Q&A
    Route::get ('qa/create'      , 'QaController@create_question');
    Route::post('qa/create'      , 'QaController@store_question');
    Route::group(['middleware' => 'permission:management'], function() {
        Route::get ('qa/questions'   , 'QaController@index_questions');
        Route::get ('qa/answer'      , 'QaController@create_answer');
        Route::post('qa/answer'      , 'QaController@store_answer');
        Route::get ('qa/edit/{id}'   , 'QaController@edit');
        Route::post('qa/update/{id}' , 'QaController@update');
        Route::get ('qa/delete/{id}' , 'QaController@destroy');
        Route::get ('qa/solved'      , 'QaController@solved');

        // File upload center
        //------------------------------------------------------------------------------------------------------
        Route::get('file', 'FileController@index');
        Route::get('file/edit/{id}', 'FileController@edit');
        Route::get('file/delete/{id}', 'FileController@destroy');
        Route::post('file/update/{id}', 'FileController@update');
        Route::post('file/store', 'FileController@store');
        //------------------------------------------------------------------------------------------------------
    });

});
//******************************************************************************************************




//Department and club
//******************************************************************************************************
Route::get('group', 'Department\ClubController@index');
Route::get('group/{group}', 'Department\ClubController@group');
Route::post('group/new', 'Department\ClubController@store');
Route::get('group/{group}/{cate}', 'Department\ClubController@cate');
Route::get('group/{group}/show/{id}', 'Department\ClubController@show');
Route::post('group/update','Department\ClubController@update');
//******************************************************************************************************


//Campus
//******************************************************************************************************
Route::get('campus', 'Campus\CampusController@index');
Route::get('campus/add_view', 'Campus\CampusController@addView');
Route::post('campus/add_view', 'Campus\CampusController@store');
Route::get('campus/{id}', 'Campus\CampusController@showView');
Route::get('campus/edit_view/{id}', 'Campus\CampusController@editView');
Route::post('campus/edit_view/{id}', 'Campus\CampusController@update');
Route::get('campus/delete_view/{id}', 'Campus\CampusController@deleteView');
//******************************************************************************************************


//Document
//******************************************************************************************************
Route::get('document', 'Document\DocumentController@index');
Route::get('document/ckeditor', 'Document\DocumentController@editor');
Route::post('document/add_content', array('as' => 'document/add_content', 'uses' => 'Document\DocumentController@store'));
Route::get('department/{id_1}', 'Document\DocumentController@document_1');
Route::get('department/{id_1}/{id_2}', 'Document\DocumentController@document_2');
Route::get('department/{id_1}/{id_2}/{id_3}', 'Document\DocumentController@document_3');
//******************************************************************************************************

// video
//******************************************************************************************************
Route::get('video2', function () {
    return view('video2');
});
//******************************************************************************************************
