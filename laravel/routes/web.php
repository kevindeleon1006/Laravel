<?php

use App\Http\Controllers\CropsandSeed;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dash;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data['title'] = 'e-PAGO';
    return view('welcome', $data);
});


Route::controller(UsersController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::get('registration', 'registration')->name('registration');
    Route::get('logout', 'logout')->name('logout');
    Route::post('validate_registration', 'validate_registration')->name('user.validate_registration');
    Route::post('validate_login', 'validate_login')->name('user.validate_login');
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('forgot', 'forgot');
    Route::get('forgotpass', 'forgotpass')->name('forgotpass');
    Route::match(['get', 'post'], 'forgotpassword', 'forgotpassword');
});

Route::controller(Dash::class)->group(function () {
    Route::get('profile/show', 'show')->name('show');
    Route::get('profile/userprofile', 'userprofile')->name('userprofile');
    Route::get('profile/maindash', 'maindash')->name('maindash');
    Route::get('profile/{id}', 'edit')->name('user.edit_profile');
    Route::post('profile/{id}', 'update')->name('user.update_profile');
});

Route::controller(CropsandSeed::class)->group(function () {
    Route::get('crops', 'index')->name('crops');
});
