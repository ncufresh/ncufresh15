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
//browser detection
//******************************************************************************************************
Route::before(function(){
    $browser = Agent::browser();
    $version = Agent::version($browser);
    // var_dump($browser);
    // var_dump($version);
    if ($browser == "IE" && $version <= 9) {
        return view('support');
    }
});
// crash and jxcode
//******************************************************************************************************
// index
Route::get('/', 'HomepageController@index');

//Announcement on Homepage
Route::get('/ann/{id?}', 'AnnouncementController@get');

// Calender on Homepage
Route::get('/cal/get', 'CalenderController@get');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// show user
Route::get('user/openbag', 'UserController@openbag');
Route::get('user/{id}', 'UserController@show');

// bottle
Route::get('bottle/new', 'BottleController@getNewBottle');
Route::get('bottle/open/{token}', 'BottleController@open');
Route::post('bottle/verify/{token}', 'BottleController@verify');
Route::post('bottle/write/{token}', 'BottleController@write');

// knowledge
Route::get('knowledge/{id}', 'KnowledgeController@show');

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
Route::get('upload_img/{id}', 'FileController@show_img');

Route::get('creature/info/{creature}/{id}', 'CreatureController@info');

// Authenticated routes...
Route::group(['middleware' => 'auth'], function () {
    Route::get('creature/level/{creature}/{id}', 'CreatureController@level');
    Route::get('creature/grow/{creature}/{id}', 'CreatureController@grow');
    Route::post('video2/add','Video\GuestbookController@add');
    // Dashboard
    Route::group(['middleware' => 'permission:admin'], function() {
		Route::get('user'     , 'UserController@index');
        Route::get ('user/delete/{id}', 'UserController@destroy');
    });

	// Note: Permission must be authorize in controller
	Route::get ('user/edit/{id}'  , 'UserController@edit');
	Route::get ('user/chbg/{bg}'  , 'UserController@changeBackground');
	Route::post('user/update/{id}'  , 'UserController@update');

    // Home
    Route::get('home', function() {
        return redirect('/');
    });

    // Manage Q&A
    Route::get ('qa/create'      , 'QaController@create_question');
    Route::post('qa/create'      , 'QaController@store_question');
    Route::group(['middleware' => 'permission:management'], function() {
        Route::get('group/add', 'Department\ClubController@add');
        Route::post('group/new', 'Department\ClubController@store');
        Route::post('group/update','Department\ClubController@update');

        Route::get ('qa/questions'   , 'QaController@index_questions');
        Route::get ('qa/bottle/{id}' , 'QaController@create_bottle');
        Route::get ('qa/answer'      , 'QaController@create_answer');
        Route::post('qa/answer'      , 'QaController@store_answer');
        Route::get ('qa/edit/{id}'   , 'QaController@edit');
        Route::post('qa/update/{id}' , 'QaController@update');
        Route::get ('qa/delete/{id}' , 'QaController@destroy');
        Route::get ('qa/solved'      , 'QaController@solved');

        Route::get('document/ckeditor', 'Document\DocumentController@editor');
        Route::get('document/edit_content/{id}', 'Document\DocumentController@edit');
        Route::post('document/store_content', 'Document\DocumentController@store');


        Route::get('life/edit/{id}','Life\LifeController@edit');
        Route::post('life/update/{id}','Life\LifeController@update');
        Route::post('life/addpic/{id}','Life\LifeController@add_pictures');
        Route::get('life/delpic/{id}','Life\LifeController@delete_pictures');

        // File upload center
        //------------------------------------------------------------------------------------------------------
        Route::get('file', 'FileController@index');
        Route::get('file/edit/{id}', 'FileController@edit');
        Route::get('file/delete/{id}', 'FileController@destroy');
        Route::post('file/update/{id}', 'FileController@update');
        Route::post('file/store', 'FileController@store');
        //------------------------------------------------------------------------------------------------------


        // Campus admin
        //------------------------------------------------------------------------------------------------------
        Route::get('campus/add_view', 'Campus\CampusController@addView');
        Route::post('campus/add_view', 'Campus\CampusController@store');
        Route::get('campus/edit_view/{id}', 'Campus\CampusController@editView');
        Route::post('campus/edit_view/{id}', 'Campus\CampusController@update');
        Route::get('campus/delete_view/{id}', 'Campus\CampusController@deleteView');
        //------------------------------------------------------------------------------------------------------


        Route::post('video2/delete','Video\GuestbookController@delete');
        Route::post('bottle/pm/{id}', 'BottleController@private_message');

		//Announcement
		//-----------------------------------------------------------------------------------------------------
		Route::post('/ann/new', 'AnnouncementController@store');
		Route::get('/ann/delete/{id}', 'AnnouncementController@destroy');
		Route::post('/ann/update/{id}', 'AnnouncementController@update');

		//Announcement for QA on Homepage
		//-----------------------------------------------------------------------------------------------------
		Route::post('/annqa/new', 'AnnQAController@store');
		Route::get('/annqa/delete/{id}', 'AnnQAController@destroy');
		Route::post('/annqa/update/{id}', 'AnnQAController@update');

		//Calender
		//----------------------------------------------------------------------------------------------------
		Route::post('/cal/new', 'CalenderController@store');
		Route::get('/cal/delete/{id}', 'CalenderController@destroy');
		Route::post('/cal/update/{id}', 'CalenderController@update');

		//Admin of Homepage
		Route::get('/admin/{category?}', 'AdminController@index');
    });

});
//******************************************************************************************************

//Department and club
//******************************************************************************************************
Route::get('group', 'Department\ClubController@index');
Route::get('group/{group}', 'Department\ClubController@group');
Route::get('group/{group}/{cate}', 'Department\ClubController@cate');
Route::get('group/{group}/show/{id}', 'Department\ClubController@show');
//******************************************************************************************************


//Campus
//******************************************************************************************************
Route::get('campus', 'Campus\CampusController@index');
Route::get('campus/{cate}', 'Campus\CampusController@cate');
Route::get('campus/view/{id}', 'Campus\CampusController@showView');
//******************************************************************************************************


//Document
//******************************************************************************************************
Route::get('document', 'Document\DocumentController@index');	
Route::get('document/{page_id}', 'Document\DocumentController@get_content_1');
Route::get('document/{page_id}/{page_id_2}', 'Document\DocumentController@get_content_2');
Route::get('document/{page_id}/{page_id_2}/{id}', 'Document\DocumentController@get_content_3');
//******************************************************************************************************

// video
//******************************************************************************************************
Route::get('video', 'Video\GuestbookController@index');
Route::get('video/{vid}','Video\GuestbookController@index2');
Route::get('/ajax/comment','Video\GuestbookController@load');
Route::get('videotest', 'Video\GuestbookController@videotest');
//******************************************************************************************************

// Game
//******************************************************************************************************
Route::group(['middleware' => 'auth'], function () {
    Route::get('game', 'GameController@index');
    Route::get('game/RandomQuestionAndAnswer', 'KnowledgeController@getQuestion');
    Route::get('game/save', 'GameController@init');
    Route::get('game/whether', 'GameController@setRightAnswer');
});
//******************************************************************************************************

// life
//******************************************************************************************************
Route::get('life', 'Life\LifeController@index');
Route::get('life/category/{category}', 'Life\LifeController@introduce');
Route::get('life/{id}','Life\LifeController@show');
//******************************************************************************************************

// about
//******************************************************************************************************
Route::get('about', function(){
	return view('about');
});
