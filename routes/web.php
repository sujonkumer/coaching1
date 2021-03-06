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
//home page

// Route::get('/', function(){
//     return view('welcome');
// });


Route::get('/user-registration',[
    'uses' => 'UserRegistrationController@showRegistrationForm',
    'as' => 'user-registration'
])->middleware('auth');

Route::post('/user-registration',[
    'uses' => 'UserRegistrationController@userSave',
    'as' => 'user-save'
])->middleware('auth');

Route::get('/user-list',[
    'uses' => 'UserRegistrationController@userList',
    'as' => 'user-list'
])->middleware('auth');

Route::get('/user-profile/{userId}',[
    'uses' => 'UserRegistrationController@userProfile',
    'as' => 'user-profile'
])->middleware('auth');

Route::get('/change-user-info/{id}',[
    'uses' => 'UserRegistrationController@changeUserInfo',
    'as' => 'change-user-info'
])->middleware('auth');

Route::post('/user-info-update',[
    'uses' => 'UserRegistrationController@userInfoUpdate',
    'as' => 'user-info-update'
])->middleware('auth');

Route::get('/change-profile-avatar/{id}',[
    'uses' => 'UserRegistrationController@changeUserAvatar',
    'as' => 'change-profile-avatar'
])->middleware('auth');

Route::post('/update-user-photo',[
    'uses' => 'UserRegistrationController@updateUserPhoto',
    'as' => 'update-user-photo'
])->middleware('auth');

Route::get('/change-user-password/{id}',[
    'uses' => 'UserRegistrationController@changeUserPassword',
    'as' => 'change-user-password'
])->middleware('auth');

Route::post('/user-password-update',[
    'uses' => 'UserRegistrationController@userPasswordUpdate',
    'as' => 'user-password-update'
])->middleware('auth');

//general section
Route::get('/add-header-footer',[
    'uses' => 'HomePageController@addHeadreFooter',
    'as' => 'add-header-footer'
])->middleware('auth');

Route::post('/header-and-footer-save',[
    'uses' => 'HomePageController@headerAndFooterSave',
    'as' => 'header-and-footer-save'
])->middleware('auth');



Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');


