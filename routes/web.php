<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentPanel\StudentController;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\CompanyPanel\CompanyController;
use App\Http\Controllers\StudentPanel\ApplyJobController;
use App\Http\Controllers\StudentPanel\SearchController;
use App\Http\Controllers\StudentPanel\MessageController;
use App\Http\Controllers\CompanyPanel\JobpostController;
use App\Http\Controllers\CompanyPanel\InterviewController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostJobController;
use App\Http\Middleware\RoleMiddleware;


Route::get('/', function () {
    return view('welcome');
});

//show navbar
Route::get('/applyjob', [ApplyJobController::class, 'applyjob'])->middleware(['auth', 'verified'])->name('applyjob');
Route::get('/search', [SearchController::class, 'search'])->middleware(['auth', 'verified'])->name('search');
Route::get('/message', [MessageController::class, 'message'])->middleware(['auth', 'verified'])->name('message');
Route::get('/jobapply', [ApplyController::class, 'index'])->middleware(['auth', 'verified'])->name('jobapply');
Route::get('company/postedjob', [PostJobController::class, 'index'])->middleware(['auth', 'verified'])->name('company.postedjob');
Route::get('company/interview', [InterviewController::class, 'index'])->middleware(['auth', 'verified'])->name('company.interview');

//show profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//role dashboard
Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('company/dashboard',[CompanyController::class, 'index'])->middleware(RoleMiddleware::class)->name('company.dashboard');
});

//company
Route::middleware('auth')->group(function () {
    
    Route::controller(JobpostController::class)->group(function() {
        Route::get('company/post', 'create')->name('company.post');
        Route::post('company/post', 'store')->name('company.post');
        Route::get('company/destroy/{id}', 'destroy')->name('company.destroy');
    });
});

//student
Route::middleware('auth')->group(function () {
    
    Route::controller(JobpostController::class)->group(function() {
        Route::get('/search', 'show')->name('search'); 
        Route::get('company/postedjob', 'check')->name('company.postedjob');     
           
    });
});



//apply job
Route::middleware('auth')->group(function () {
    
    Route::controller(ApplyController::class)->group(function() {
        Route::post('/jobapply', 'store')->name('jobapply'); 
        Route::get('/jobapply', 'create')->name('jobapply');     
        Route::get('/applyjob', 'show')->name('applyjob'); 
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
});

//count
Route::get('/dashboard', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');