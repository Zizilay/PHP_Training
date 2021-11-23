<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false]);




Route::get('/home', 'Home\HomeController@index')->name('home');

// vistor, user, admin authorized


// user, admin authorized
Route::group(['middleware' => ['auth']], function () {
 
  Route::get('/user/change-password', 'User\UserController@showChangePasswordView')->name('change.password');
  Route::post('/user/change-password', 'User\UserController@savePassword')->name('change.password');
});
// user, admin authorized
Route::group(['middleware' => ['auth']], function () {
  Route::get('/profile/{userId}/{profileName}', 'File\FileController@getUserProfile')->name('profile.photo');
  Route::get('/user/profile', 'User\UserController@showUserProfile')->name('profile');
  Route::get('/user/profile/edit', 'User\UserController@showUserProfileEdit')->name('profile.edit');
  Route::post('/user/profile/edit', 'User\UserController@submitEditProfileView')->name('profile.edit');
  Route::get('/user/profile/edit/confirm', 'User\UserController@showEditProfileConfirmView')->name('profile.edit.confirm');
  Route::post('/user/profile/edit/confirm', 'User\UserController@submitProfileEditConfirmView')->name('profile.edit.confirm');
});
// only admin authorized
Route::group(['middleware' => ['admin']], function () {
  Route::get('/user/list', 'User\UserController@showUserList')->name('userlist');
  Route::get('user/register', 'Auth\RegisterController@showRegistrationView')->name('register');
  Route::post('user/register', 'Auth\RegisterController@submitRegistrationView')->name('register');
  Route::get('user/register/confirm', 'Auth\RegisterController@showRegistrationConfirmView')->name('register.confirm');
  Route::post('user/register/confirm', 'Auth\RegisterController@submitRegistrationConfirmView')->name('registerConfirm');
  Route::delete('/user/delete/{userId}', 'User\UserController@deleteUserById');
});


