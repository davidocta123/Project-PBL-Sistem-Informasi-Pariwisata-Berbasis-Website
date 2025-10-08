<?php
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GlampingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactUsController;


Route::get('/', function () {
    return view('welcome');
});

// Group untuk admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Group untuk user biasa
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Resource routes
Route::resource('activities', ActivitiesController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('glamping', GlampingController::class);
Route::resource('testimonial', TestimonialController::class);
Route::resource('contact', ContactUsController::class);