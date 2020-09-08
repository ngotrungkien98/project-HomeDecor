<?php

use App\Mail\ContactMail;
use App\Post;
use ILuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
    return redirect()->route('store');
});

Auth::routes();


Route::get('/store', 'HomeController@index')->name('store');
Route::get('/store', 'HomeController@store')->name('store');
Route::get('/category', 'HomeNavController@category')->name('category');
Route::get('/about', 'HomeNavController@about')->name('about');
Route::get('/team', 'HomeNavController@team')->name('team');


Route::get('/products', 'ProductController@index')->name('product.index');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.remove');
Route::put('/products/{product}', 'ProductController@update')->name('product.update');


Route::get('/productdetail/{id}', 'ProductController@productdetail')->name('product.detail');
Route::get('/products/{id}', 'ProductController@categoryId')->name('category.categoryId');
//search
Route::get('/search','ProductController@search');


Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('cart.add');
Route::get('/Shopping-cart', 'ProductController@showCart')->name('cart.show');


Route::get('/checkout/{amount}', 'ProductController@checkout')->name('cart.checkout')->middleware('auth');

Route::post('/charge', 'ProductController@charge')->name('cart.charge');

Route::get('/orders', 'OrderController@index')->name('order.index');

Route::get('/home', 'HomeController@index1')->name('home');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//login facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
//login google
Route::get('login/google', 'Auth\LoginController@redirectToProvider1')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback1');

//news
Route::get('/news', 'HomeNavController@news')->name('news');
Route::get('/news/read/{id}', 'HomeNavController@readnews')->name('read.news');




//print
Route::get('/report','ProductController@report');
Route::get('/reportBill','ProductController@reportBill');


