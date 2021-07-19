<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\MessageController;
use App\Http\Controllers\Back\BlogController;
use App\Http\Controllers\Back\CountryController;
use App\Http\Controllers\Back\CourseController;
use App\Http\Controllers\Back\EducationController;
use App\Http\Controllers\Back\ServiceController;
use App\Http\Controllers\Back\SuccessController;
use App\Http\Controllers\Back\TestController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/test', [TestController::class, 'index'])->name('index');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'blog_inner'])->name('blog.inner');
Route::get('/country', [HomeController::class, 'country'])->name('country');
Route::get('/country/{id}', [HomeController::class, 'country_inner'])->name('country.inner');
Route::get('/servise/{id}', [HomeController::class, 'servise_inner'])->name('servise.inner');


Route::prefix('admin/')->middleware('isLogin')->group(function () {
    Route::view('login', 'back.login')->name('admin.login');
    Route::post('login', [AuthController::class, 'loginPost'])->name('admin.login.post');
});

Route::prefix('admin/')->middleware('isAdmin')->group(function () {

    Route::view('/', 'back.home_admin')->name('home_admin');
    Route::resource('users', UserController::class);
    Route::resource('messages', MessageController::class);
    Route::resource('countries', CountryController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('educations', EducationController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('successes', SuccessController::class);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
