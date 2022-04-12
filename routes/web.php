<?php

use Illuminate\Support\Facades\Route;
use LDAP\Result;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');

Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');

Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');

Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');

Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');

Route::get('/contact/all/{id}/deletw', [ContactController::class, 'deleteMessage'])->name('contact-delete');

Route::name('user.')->group(function(){
    Route::get('/private', [AuthController::class, 'showPrivatePage'])->middleware('auth')->name('private');
    Route::get('/login-form', [AuthController::class, 'showLoginForm'])->name('login-form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/registration-form', [RegistrationController::class, 'showRegistrationForm'])->name('registration-form');
    Route::post('/registration', [RegistrationController::class, 'addUser'])->name('registration');
});
