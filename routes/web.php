<?php

use App\Http\Controllers\{
    ShopController,
    ProfileController,
    NewsController,
    FAQController,
    ContactController,
    PlayerController,
    Auth\LoginController,
    Auth\RegisterController,
    Auth\ForgotPasswordController,
    Auth\ResetPasswordController,
    CartController,
    ClubController,
    HomeController,
    Auth\VerificationController,
    Auth\ConfirmPasswordController,
    AboutController,
    Admin\CartController as AdminCartController,
    Admin\ContactController as AdminContactController,
    Admin\NewsController as AdminNewsController,
    Admin\ProductController as AdminProductController,
    Admin\UserController as AdminUserController,
    Admin\PlayerController as AdminPlayerController

};
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Password Reset Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-profile-information', [ProfileController::class, 'updateProfileInformation'])->name('profile.updateProfileInformation');
});

// News Routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/pots', [NewsController::class, 'show'])->name('news.pots');
Route::get('/news/stadium', [NewsController::class, 'show'])->name('news.stadium');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Shop Routes
Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/jerseys', [ShopController::class, 'jerseys'])->name('shop.jerseys');
    Route::get('/accessories', [ShopController::class, 'accessories'])->name('shop.accessories');
    Route::get('/equipment', [ShopController::class, 'equipment'])->name('shop.equipment');
    Route::get('/product1', [ShopController::class, 'product1'])->name('shop.product1');
    Route::get('/product2', [ShopController::class, 'product2'])->name('shop.product2');
    Route::get('/product3', [ShopController::class, 'product3'])->name('shop.product3');
    Route::get('/product4', [ShopController::class, 'product4'])->name('shop.product4');
});

// Club Routes
Route::prefix('club')->group(function () {
    Route::get('/', [ClubController::class, 'index'])->name('club.index');
    Route::get('/history', [ClubController::class, 'history'])->name('club.history');
    Route::get('/stadium', [ClubController::class, 'stadium'])->name('club.stadium');
    Route::get('/partners', [ClubController::class, 'partners'])->name('club.partners');
});

// Contact Routes
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('news', AdminNewsController::class);
    Route::resource('users', AdminUserController::class);
    Route::resource('contact', AdminContactController::class);
    Route::resource('product', AdminProductController::class);
    Route::resource('carts', AdminCartController::class);
    Route::resource('players', AdminPlayerController::class);
});

// Additional Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

Route::get('/faq', [FAQController::class, 'index'])->name('faq');

Route::prefix('cart')->group(function () {
    Route::post('/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/pay', [CartController::class, 'pay'])->name('cart.pay');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');

// Public cart routes, accessible by authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/cart/create', [CartController::class, 'create'])->name('cart.create');
    Route::post('/cart/shop', [CartController::class, 'shop'])->name('cart.shop');
    Route::get('/orderdetails/{id}', [CartController::class, 'show'])->name('cart.details');
    Route::get('/carts', [CartController::class, 'index'])->name('cart.index');
});
