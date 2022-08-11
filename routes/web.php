<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\googlecontroller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Frontend\frontendController;
use App\Http\Controllers\admin\AdminfrontendController;
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
//Route::get('/', function () {
    //$user= new \App\CustomLibrary\User();
    //$user->MyName();
   // \App\CustomLibrary\UserFacade::myName();
  //  return view('welcome', ['name' => 'Samantha']);
//});

Route::get('/', [frontendController::class, 'index']);
Route::get('/category', [frontendController::class, 'category']);
Route::get('/view-category/{slug}', [frontendController::class, 'view_category']);
Route::get('/category/{cate_slug}/{product_slug}', [frontendController::class, 'product_view']);

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
// Add to Cart Route
Route::POST('/add-to-cart',[CartController::class, 'AddProduct']);

Route::middleware(['auth'])->group(function (){
    Route::get('/cart',[CartController::class, 'viewcart']);
 });


// Route for Admin login
Route::middleware(['auth', 'isAdmin'])->group(function ()
 {
    Route::get('/dashboard',[AdminfrontendController::class, 'index']);

    Route::get('/categories',[CategoryController::class, 'category']);
    Route::get('/addcategory',[CategoryController::class, 'addcategory']);
    Route::post('/insert',[CategoryController::class, 'insert']);

    Route::get('/edit/{id}',[CategoryController::class, 'edit']);
    Route::post('/update/{id}',[CategoryController::class, 'update']);
    Route::get('/delete/{id}', [CategoryController::class, 'delete']);

    //Product Route
    Route::get('/products', [ProductController::class, 'product']);
    Route::get('/addproduct', [ProductController::class, 'addproduct']);
    Route::post('/insert_product',[ProductController::class, 'insert_product']);
    Route::get('/edit_product/{id}',[ProductController::class, 'edit']);
    Route::post('/update_product/{id}',[ProductController::class, 'update']);
    Route::get('/delete_product/{id}', [ProductController::class, 'delete']);
});

// Google
Route::get('login/google',[googlecontroller::class, 'redirectToGoogle'])->name('login.google');

Route::get('login/google/callback',[googleController::class, 'handleGoogleCallback']);

//fb
Route::get('login/facebook',[googlecontroller::class, 'redirectTofacebook'])->name('login.facebook');
Route::get('login/facebook/callback',[googleController::class, 'handlefacebookCallback']);


// login with GitHUb
Route::get('login/github',[LoginController::class, 'redirectToProvider']);
Route::get('login/github/callback',[LoginController::class, 'handleProviderCallback']);



