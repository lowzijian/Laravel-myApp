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
});

/*Route::resources([
	'/division' => 'DivisionController',
	'/member' => 'MemberController',
	'/group' => 'GroupController',
]);
*/

//Division
/*
Route::get('/division/create', 'DivisionController@create')->name('division.create');
Route::post('/division', 'DivisionController@store')->name('division.store');
Route::get('/division', 'DivisionController@index')->name('division.index');
Route::get('/division/{id}',
'DivisionController@show')->name('division.show');
Route::get('/division/{id}/edit',
'DivisionController@edit')->name('division.edit');
Route::put('/division/{id}',
'DivisionController@update')->name('division.update');
*/
//Route::resource('/division', 'DivisionController', ['except' => ['destroy',]]);
Route::resource('/division', 'DivisionController');
Route::get('division/delete/{division}',['as' => 'division.delete', 'uses' => 'DivisionController@destroy']);


//Member
/*
Route::post('/member', 'MemberController@store')->name('member.store');
Route::get('/member', 'MemberController@index')->name('member.index');
Route::get('/member/index', 'MemberController@index')->name('member.index');
Route::get('/member/create', 'MemberController@create')->name('member.create');
Route::get('/member/{id}',
'MemberController@show')->name('member.show');
Route::get('/member/{id}/edit',
'MemberController@edit')->name('member.edit');
Route::put('/member/{id}',
'MemberController@update')->name('member.update');
*/
//Route::resource('/member', 'MemberController', ['except' => ['destroy',]]);
Route::resource('/member', 'MemberController');
Route::get('member/delete/{member}',['as' => 'member.delete', 'uses' => 'MemberController@destroy']);


//Group
Route::resource('/group', 'GroupController');
//Route::resource('/group', 'GroupController', ['except' => ['destroy',]]);
Route::get('group/delete/{group}',['as' => 'group.delete', 'uses' => 'GroupController@destroy']);
