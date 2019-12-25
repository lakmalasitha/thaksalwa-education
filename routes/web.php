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
    return view('layout.home');

});
Route::get('sign', function () {
    return view('layout.signin');

});
Route::get('/reprofile', function () {
    return view('layout.regprofile');

});
Route::get('/login', function () {
    return view('layout.login');

});
Route::get('/teacherprofile', function () {
    return view('layout.teacherprofile');

});
// Route::get('/addads', function () {
//     return view('layout.advertisment.addadvertisement');

// });
Route::get('/addolevel', function () {
    return view('layout.advertisment.ordinaryleveladd');

});
Route::get('/addalevel', function () {
    return view('layout.advertisment.ordinaryleveladd');

});
Route::get('/showadds', function () {
    return view('layout.advertisment.showadvertisement');

});
// Route::get('/addalevel', function () {
//     return view('layout.advertisment.advanceleveladd');

// });

Route::get('/addolevel', 'AddAdvertisementController@olevel')->middleware('auth');
Route::post('/advertisement', 'AddAdvertisementController@addadvertisement')->middleware('auth');
Route::get('/addads', 'AddAdvertisementController@index')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
// Route::get('/index', 'HomeController@index')->name('index')->middleware('auth');
Route::get('/register/student', 'HomeController@registerStudent')->name('home');
Route::get('/register/teacher', 'HomeController@registerTeacher')->name('home');
