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
// Students complain route
Route::get('/studentprofile/complain',function(){
    return view('layout.studentprofile.studentcomplain');
});
// submit complains
Route::post('complain_upload','ComplainsController@store');
Route::post('/delete/deleteComplain/{id}', 'ComplainsController@complainRemove');
Route::post('/approve/approveComplain/{id}', 'ComplainsController@complainApprove');
Route::get('/viewComplains','AdminController@complains');

Route::get('/studentManage','AdminController@students');
Route::post('/delete/deletestudent/{id}', 'AdminController@studentRemove');
Route::get('/teacherManage','AdminController@teachers');
Route::post('/delete/deleteteacher/{id}', 'AdminController@teacherRemove');
Route::post('/registerStudent','AdminController@addStudent');
Route::post('/registerTeacher','AdminController@addteacher');

Route::get('/studentsProfile/{id}', 'AdminController@studentView');
Route::get('/teachersProfile/{id}', 'AdminController@teacherView');
//Route::get('/studentsProfile/{id}', 'AdminController@studentDetails');
// Route::get('/myads',function(){
//     return view('layout.profile.myadvertisment');
// });
//file upload route
Route::resource('files_upload','FileController');
Route::get('uplodefiles','FileController@index');
Route::post('/delete/filedelete/{id}', 'FileController@destroy');
Route::get('downloadfiles','FileController@downloadFunc');

Route::get('/aboutus', 'PageController@aboutus');
Route::get('/livepage', 'PageController@live');
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
Route::post('/delete/studentpost/{postid}', 'StudentPostController@delete');

Route::get('/myads', 'PageController@myadvertisment');
Route::get('/editprofile', 'PageController@editprofile');
Route::get('/changepassword', 'PageController@changepassword');
Route::get('/myprofile', 'PageController@myprofile');
Route::get('/profilehome', 'PageController@profilehome');
Route::get('/profile/ad/{id}/editadvertisment', 'PageController@editadvertisment');
Route::post('/profile/ad/{id}/editadvertisment','PageController@storeeditads');
Route::post('/delete/teacherpost/{postid}', 'TeacherPostController@delete');
Route::get('/findstudent', 'PageController@findstudent');



// Route::get('/req', 'PageController@studentrequest');
// Route::get('/studentprofile', 'StudentController@studentprofile');
// Route::get('/myrequest', 'StudentController@showrequest');
// Route::get('/profile/ad/{id}/editrequest', 'StudentController@editrequest');
// Route::post('/profile/ad/{id}/editrequest','StudentController@storeeditrequest');

Route::get('/myrequest', 'StudentController@showrequest');
Route::get('/profile/ad/{id}/editrequest', 'StudentController@editrequest');
Route::post('/profile/ad/{id}/editrequest','StudentController@storeeditrequest');
Route::get('/studentprofile', 'StudentController@studentprofile');
Route::get('/editacc', 'StudentController@editetails');
Route::get('/changepass', 'StudentController@changedetails');
Route::post('/delete/studentpost/{postid}', 'StudentPostController@delete');
Route::get('/findteacher', 'StudentController@findteacher');




// Route::get('/profile/ad/{id}/editrequest', 'StudentController@showrequest');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
// Route::get('/index', 'HomeController@index')->name('index')->middleware('auth');
Route::get('/register/student', 'RegisterHelp@registerStudent')->name('home');
Route::get('/register/teacher', 'RegisterHelp@registerTeacher')->name('home');

//routes contact
Route::get('/contactus', 'ContactFormController@create')->name('createContact');
Route::post('/contactus', 'ContactFormController@store');

Route::post('/teachersearch','TeacherPostController@searchadvertisment');
Route::post('/studentsearch','StudentPostController@searchrequest');

Route::get('/admin','AdminController@index');
Route::get('/adminlogin','AdminController@index');

Route::get('/payment', 'PaymentController@index');
Route::post('/charge', 'PaymentController@charge');

//ishanka
Route::get('/student_live', 'LiveVideoController@getvideo')->name('videoHome');
Route::get('/teacher_live', 'LiveVideoController@teacherGoLive');
Route::get('/teacher_redirect_youtube', 'LiveVideoController@teacherRedirectYoutube');
Route::get('/complanit', 'LiveVideoController@complaint')->name('complaint');
Route::get('/test', 'LiveVideoController@getLiveSessionData');

