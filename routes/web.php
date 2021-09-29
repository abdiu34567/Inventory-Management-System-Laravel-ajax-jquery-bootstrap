<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Mail\WelcomeMail;
use App\Models\File;
use GuzzleHttp\Middleware;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


//Login => position matters. this must be at top
Route::get('/login', [LoginController::class, 'CheckAuth'])->name('login');

Route::get('/forget/password', function () {
    return view('auth.forgetPassword');
});

Route::get('/email', function () {
    Mail::to('abdiurgessa9@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

Route::post('/dashboard', [LoginController::class, 'Register']);
Route::get('/{dashboard}', [RouteController::class, 'CheckProfile']);

Route::get('/dashboard/{list}', [RouteController::class, 'CheckProfile']);


Route::get('/dashboard/{add}', [RouteController::class, 'CheckProfile']);

Route::get('/users/edit/{id}', [RouteController::class, 'CheckProfile']);
Route::get('/dashboard/{profile}', [RouteController::class, 'CheckProfile']);

//registration form => addUser
Route::post('/dashboard/list', [RouteController::class, 'AddUser'])->name('add.user');

Route::post('/dashboard/add/{id}', [RouteController::class, 'UpdateUser'])->name('update.user');


//ajax created
Route::get('/users/delete/', [RouteController::class, 'deleteAjax'])->name('action.delete');
Route::get('/live_search/action', [RouteController::class, 'action'])->name('live_search.action');

//profile
Route::post('/dashboard/profile', [RouteController::class, 'FileUpload'])->name('profile');
//update profile password
Route::post('/dashboard/profile/password', [RouteController::class, 'UpdatePassword'])->name('password.match');


// redirect to login when logout clicked
Route::get('/', [RouteController::class, 'LogOut'])->name('logout');
