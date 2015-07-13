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

Route::get('/', function () {
    return view('welcome');
});

//==========================================================================================================================
//Department and club

Route::get('club', array('as' => 'club', 'uses' => 'ClubController@index'));
Route::get('newClub', array('as' => 'newClub', 'uses' => 'NewClubController@index'));