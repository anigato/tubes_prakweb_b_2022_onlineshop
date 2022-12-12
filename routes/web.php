<?php
use App\Http\Controllers\UserHomeController;

use App\Http\Controllers\AdminBrandController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminSlidderController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
})->name('welcome');


//Register Admin
Route::get('/admin/register', [RegisterController::class, 'indexAdmin'])->name('registerAdmin');
Route::post('/admin/register', [RegisterController::class, 'storeAdmin']);

// register user
Route::get('/register', [RegisterController::class, 'indexUser'])->name('registerUser');
Route::post('/register', [RegisterController::class, 'storeUser']);

// login admin
Route::get('/admin/login', [LoginController::class, 'indexAdmin'])->name('loginAdmin');
Route::post('/admin/login', [LoginController::class, 'authenticateAdmin']);

// login user
Route::get('/login', [LoginController::class, 'indexUser'])->name('loginUser');
Route::post('/login', [LoginController::class, 'authenticateUser']);


//Dashboard Admin
Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboardAdmin'])->name('dashboardAdmin');

// product
Route::resource('/product', ProductController::class);

// brand
Route::resource('/admin/brand', AdminBrandController::class);

// category
Route::resource('/admin/category', AdminCategoryController::class);

// slidder
Route::resource('/admin/slidder', AdminSlidderController::class);

// home user
Route::get('/home', [UserHomeController::class, 'homeUser'])->name('home');

// Product Admin
Route::resource('/admin/product', AdminProductController::class);

// add User Admin
Route::resource('/admin/userAdmin', AdminUserController::class);
