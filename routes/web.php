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
Route::get('/prohome',function(){
    return view('layout.profile.profilehome');
});
Route::get('/alrequst',function(){
    return view('layout.advertisment.studentrequest.alevelrequest');
});
Route::get('/olrequst',function(){
    return view('layout.advertisment.studentrequest.olevelrequest');
});
Route::get('/editpro',function(){
    return view('layout.profile.editprofile');
});
Route::get('/uplodefiles',function(){
    return view('layout.uplodefiles');
});
Route::get('/downloadfiles',function(){
    return view('layout.downloadfiles');
});
// Route::get('/myads',function(){
//     return view('layout.profile.myadvertisment');
// });
//file upload route
Route::resource('files_upload','FileController');
Route::get('uplodefiles','FileController@index');
Route::post('/delete/filedelete/{id}', 'FileController@destroy');
Route::get('downloadfiles','FileController@downloadFunc');

Route::get('/aboutus', 'PageController@aboutus');
// Route::get('/contactus', 'PageController@contactus');


Route::get('/addolevel', 'AddAdvertisementController@olevel')->middleware('auth');
Route::get('/addalevel', 'AddAdvertisementController@alevel')->middleware('auth');
Route::post('/advertisement', 'TeacherPostController@addteacherpost')->middleware('auth');
Route::get('/addads', 'AddAdvertisementController@index')->middleware('auth');
Route::get('/teacherpost', 'TeacherPostController@showpost');
Route::get('/showmore/{id}', 'TeacherPostController@showmore');

Route::get('/olevelrequest', 'AddAdvertisementController@olevelreq')->middleware('auth');
Route::get('/alevelrequest', 'AddAdvertisementController@alevelreq')->middleware('auth');
Route::get('/request', 'AddAdvertisementController@requst')->middleware('auth');
Route::post('/studentreq', 'StudentPostController@addstudentrequest')->middleware('auth');
Route::get('/studentpost', 'StudentPostController@showads');
Route::get('/showrequest/{id}', 'StudentPostController@showrequest');

Route::get('/myads', 'PageController@myadvertisment');
Route::get('/editprofile', 'PageController@editprofile');
Route::get('/changepassword', 'PageController@changepassword');
Route::get('/myprofile', 'PageController@myprofile');
Route::get('/profilehome', 'PageController@profilehome');
Route::get('/profile/ad/{id}/editadvertisment', 'PageController@editadvertisment');
Route::post('/profile/ad/{id}/editadvertisment','PageController@storeeditads');
Route::post('/delete/teacherpost/{postid}', 'TeacherPostController@delete');


Route::get('/studentprofile', 'StudentController@studentprofile');
Route::get('/myrequest', 'StudentController@showrequest');
Route::get('/profile/ad/{id}/editrequest', 'StudentController@editrequest');
Route::post('/profile/ad/{id}/editrequest','StudentController@storeeditrequest');

// Route::get('/profile/ad/{id}/editrequest', 'StudentController@showrequest');










Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
// Route::get('/index', 'HomeController@index')->name('index')->middleware('auth');
Route::get('/register/student', 'RegisterHelp@registerStudent')->name('home');
Route::get('/register/teacher', 'RegisterHelp@registerTeacher')->name('home');

//routes contact
Route::get('/contactus', 'ContactFormController@create')->name('createContact');
Route::post('/contactus', 'ContactFormController@store');

Route::get('/videoHome', 'VideoController@index')->name('videoHome');
Route::resource('/comments','CommentsController');
Route::resource('/replies','RepliesController');
Route::post('/replies/ajaxDelete','RepliesController@ajaxDelete');