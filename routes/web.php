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
    return view('index');

});
Route::get('sign', function () {
    return view('layout.signin');

});
Route::get('/reprofile', function () {
    return view('layout.regprofile');

});

Route::get('/changepas',function(){
    return view('layout.changepasword');
});
Route::get('/moreinfo',function(){
    return view('layout.advertisment.moreinfo');
});


Route::get('/aboutus', 'PageController@aboutus');
Route::get('/contactus', 'PageController@contactus');


Route::get('/addolevel', 'AddAdvertisementController@olevel')->middleware('auth');
Route::get('/addalevel', 'AddAdvertisementController@alevel')->middleware('auth');
Route::post('/advertisement', 'TeacherPostController@addteacherpost')->middleware('auth');
Route::get('/addads', 'AddAdvertisementController@index')->middleware('auth');
Route::get('/teacherpost', 'TeacherPostController@showpost');






Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
// Route::get('/index', 'HomeController@index')->name('index')->middleware('auth');
Route::get('/register/student', 'RegisterHelp@registerStudent')->name('home');
Route::get('/register/teacher', 'RegisterHelp@registerTeacher')->name('home');
