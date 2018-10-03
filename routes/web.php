<?php


// User Routes

Route::group(['namespace'=>'User'],function(){

Route::get('/','HomeController@index');
Route::get('post','PostController@index')->name('post');

});


// Admin Routes

Route::group(['namespace'=>'Admin'],function(){

Route::get('admin/home','HomeController@index')->name('admin.home');
Route::resource('admin/user','UserController');
Route::resource('admin/post','PostController');
Route::resource('admin/tag','TagController');
Route::resource('admin/category','CategoryController');

});
















// Route::get('/', function () {
//     return view('user/blog');
// });

// Route::get('post', function () {
//     return view('user/post');
// })->name('post');

// Route::get('admin/home', function () {
//     return view('admin/home');
// })->name('');

// Route::get('admin/post', function () {
//     return view('admin/post/post');
// })->name('');

// Route::get('admin/tag', function () {
//     return view('admin/tag/tag');
// })->name('');


// Route::get('admin/category', function () {
//     return view('admin/category/category');
// })->name('');


