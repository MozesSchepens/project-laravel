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
    AboutController
};
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\CartController as AdminCartController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

// Redirect root to login if not authenticated
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
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

// Profile Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update-profile-information', [ProfileController::class, 'updateProfileInformation'])->name('profile.updateProfileInformation');
});

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// News Routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/pots', [NewsController::class, 'pots'])->name('news.pots');
Route::get('/news/stadium', [NewsController::class, 'stadium'])->name('news.stadium');

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

// Player Routes
Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

// Contact Routes
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// FAQ Route
Route::get('/faq', [FAQController::class, 'index'])->name('faq');

// Cart Routes
Route::prefix('cart')->group(function () {
    Route::post('/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/pay', [CartController::class, 'pay'])->name('cart.pay');
});

// About Route
Route::get('/about', [AboutController::class, 'index'])->name('about');


// Home route for authenticated users
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Static about page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Profile routes, accessible only by authenticated users
Route::middleware('auth')->group(function () {
    // Show profile
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
    // Edit profile
    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // Update profile
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
});

// Resource routes for news management
Route::resource('news', NewsController::class);

Route::get('/gamelist', function () {
    return view('gamelist');
})->name('gamelist');

// Resource routes for FAQ management
Route::resource('faq', FAQController::class);

// User-facing contact form routes
Route::get('/contact', [ContactController::class, 'show'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route to display user messages, only accessible by authenticated users
Route::get('/my-messages', [ContactController::class, 'userMessages'])->name('contact.user_messages')->middleware('auth');



// Static about page
Route::view('about', 'about')->name('about');


// Admin-specific routes, prefixed with 'admin' and accessible only by admins
Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {

    // User management routes
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);

    // Other admin routes for managing news, FAQs, contacts, products, orders, and forums
    Route::resource('news', App\Http\Controllers\Admin\NewsController::class);
    Route::resource('contact', App\Http\Controllers\Admin\ContactController::class);
    Route::resource('product', App\Http\Controllers\Admin\ProductController::class);
    Route::resource('carts', App\Http\Controllers\Admin\CartController::class);
});

// Public cart routes, accessible by authenticated users
Route::middleware(['auth'])->group(function () {
    // Create a new cart
    Route::get('/cart/create', [CartController::class, 'create'])->name('cart.create');
    // Store a new cart
    Route::post('/cart/shop', [CartController::class, 'shop'])->name('cart.shop');
    // Show cart details
    Route::get('/orderdetails/{id}', [CartController::class, 'show'])->name('cart.details');
    // List all carts
    Route::get('/carts', [CartController::class, 'index'])->name('cart.index');
});

// Admin Cart routes, prefixed with 'admin' and accessible only by admins
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // List all carts for admin
    Route::get('/carts', [AdminCartController::class, 'index'])->name('admin.Carts.index');
    // Show specific cart details for admin
    Route::get('/carts/{id}', [AdminCartController::class, 'show'])->name('admin.Carts.show');
    // Update Cart status for admin
    Route::patch('/carts/{id}', [AdminCartController::class, 'update'])->name('admin.Carts.update');

    Route::delete('admin/carts/{id}', [AdminCartController::class, 'destroy'])->name('admin.Carts.destroy');

});

// Admin contact management routes, prefixed with 'admin' and accessible only by admins
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // List all contacts for admin
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contact.index');
    // Show specific contact details for admin
    Route::get('/contact/{id}', [AdminContactController::class, 'show'])->name('contact.show');
    // Reply to a contact for admin
    Route::post('/contact/reply/{id}', [AdminContactController::class, 'reply'])->name('contact.reply');

    Route::delete('admin/contact/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.destroy');

});

// User management routes, prefixed with 'admin' and accessible only by admins
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // List all users for admin
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    // Edit a specific user for admin
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    // Update a specific user for admin
    Route::put('/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    // Create a new user for admin
    Route::post('/users/create', [UserController::class, 'store'])->name('admin.users.store');
});

// Additional user management routes, prefixed with 'admin' and accessible only by admins
Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {
    // List all users for admin
    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
    // Update a specific user for admin
    Route::patch('users/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
    // Update a specific user's admin status for admin
    Route::patch('users/{id}/updateAdminStatus', [App\Http\Controllers\Admin\UserController::class, 'updateAdminStatus'])->name('users.updateAdminStatus');
    // Edit a specific user for admin
    Route::get('users/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
    // Delete a specific user for admin
    Route::delete('users/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');
    // Create a new user for admin
    Route::get('users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('users.create');
    // Store a new user for admin
    Route::post('users', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');
});
