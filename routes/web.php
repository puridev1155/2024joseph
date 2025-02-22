<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ScholarshipController;
use App\Livewire\MyPosts;


Route::resource('/', HomeController::class);

//Mission 메뉴
Route::resource('/mission', MissionController::class);
Route::get('/mission-logo', [MissionController::class, 'index'])->name('mission.logo');
Route::get('/mission-organization', [MissionController::class, 'index'])->name('mission.organization');

//Scholarship 메뉴
Route::resource('/scholarship', ScholarshipController::class);
Route::get('/scholarship-register', [ScholarshipController::class, 'index'])->name('scholarship.register');
Route::get('/scholarship-application', [ScholarshipController::class, 'apply'])->name('scholarship.apply');
Route::post('/scholarship-submit', [ScholarshipController::class, 'submitForm'])->name('register.submit');

//Leader 메뉴
Route::resource('/leader', LeaderController::class);
Route::get('/leader-graduate', [LeaderController::class, 'index'])->name('leader.graduate');
Route::get('/leader-community', [LeaderController::class, 'index'])->name('leader.community');
Route::get('/leader-unity', [LeaderController::class, 'index'])->name('leader.unity');

//Notice 메뉴
Route::resource('/notice', NoticeController::class);
Route::get('/notice/{id}', [NoticeController::class, 'show']);
Route::get('/ask/{id}', [NoticeController::class, 'shows'])->name('ask.shows');
Route::get('/notice-faq', [NoticeController::class, 'index'])->name('notice.faq');
Route::get('/notice-ask', [NoticeController::class, 'index'])->name('notice.ask');

//Donation 메뉴
Route::resource('/donation', DonationController::class);

//Ask 메뉴
Route::get('/ask-post',[AskController::class,'index'])->name('ask.post');
Route::post('/ask-store',[AskController::class,'store'])->name('ask.store');

Route::get('/registration/form',[AuthController::class,'loadRegisterForm']);
Route::post('/register/user',[AuthController::class,'registerUser'])->name('registerUser');

Route::get('/login/form',[AuthController::class,'loadLoginPage'])->name('login.form');

Route::get('/mypage', [AuthController::class, 'loadProfileUser'])->name('mypage');
Route::post('/login/user',[AuthController::class,'LoginUser'])->name('LoginUser');

Route::get('/logout',[AuthController::class,'LogoutUser']);


Route::get('/forgot/password',[AuthController::class,'forgotPassword']);

Route::post('/forgot',[AuthController::class,'forgot'])->name('forgot');

Route::get('/reset/password',[AuthController::class,'loadResetPassword']);

Route::post('/reset/user/password',[AuthController::class,'ResetPassword'])->name('ResetPassword');

Route::get('/404',[AuthController::class,'load404']);
// create controllers for each user
Route::get('user/home',[UserController::class,'loadHomePage'])->middleware('user');
Route::get('my/posts', [UserController::class,'loadMyPosts'])->middleware('user');
Route::get('create/post', [UserController::class,'loadCreatePost'])->middleware('user');
Route::get('/edit/post/{post_id}', [UserController::class,'loadEditPost'])->middleware('user');
Route::get('/view/post/{id}',[UserController::class,'loadPostPage'])->middleware('user');
Route::get('/profile',[UserController::class,'loadProfile'])->middleware('user');
Route::get('/view/profile/{user_id}',[UserController::class,'loadGuestProfile'])->middleware('user');

//Route::get('admin/home',[AdminController::class,'loadHomePage'])->middleware('admin');